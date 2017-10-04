package in.exun.teacher.activity;

import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.RelativeLayout;
import android.widget.Spinner;
import android.widget.TextView;

import com.jjoe64.graphview.GraphView;
import com.jjoe64.graphview.helper.DateAsXAxisLabelFormatter;
import com.jjoe64.graphview.series.DataPoint;
import com.jjoe64.graphview.series.LineGraphSeries;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import in.exun.teacher.R;
import in.exun.teacher.adapter.LVCourses;
import in.exun.teacher.helper.GC;
import in.exun.teacher.helper.SessionManager;
import in.exun.teacher.model.Course;

public class MainActivity extends AppCompatActivity{

    public SessionManager session;

    public String status;

    public Button btnStartLecture, btnChangeState;
    public Spinner spinnerChangeState;
    public TextView textName;
    public RelativeLayout viewChangeState;
    private AlertDialog alert;
    private List<Course> courseList = new ArrayList<>();
    private LinearLayout btnHistory ;
    private Course selectedCourse;
    GraphView graph;
    private ProgressDialog dialog;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        init();
    }

    private void init() {

        session = new SessionManager(this);
        btnStartLecture = (Button) findViewById(R.id.btn_lecture);
        btnChangeState = (Button) findViewById(R.id.btn_change_state);
        spinnerChangeState = (Spinner) findViewById(R.id.spinner_change_state);
        textName = (TextView) findViewById(R.id.text_name);
        viewChangeState = (RelativeLayout) findViewById(R.id.view_change_status);
        btnHistory = (LinearLayout) findViewById(R.id.btn_history);
        graph = (GraphView) findViewById(R.id.graph);
        dialog = new ProgressDialog(this);

        btnStartLecture.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                showDialog();

                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        hideDialog();
                        showAvailableCoursesDialog();
                    }
                },1000);

            }
        });

        btnChangeState.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                showDialog();

                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        hideDialog();
                        String item = (String) spinnerChangeState.getSelectedItem();

                        if (item.equals(GC.STATE_TEXT_DEFAULT)){
                            status = GC.STATE_DEFAULT;
                        } else if (item.equals(GC.STATE_TEXT_ONGOING)){
                            status = GC.STATE_ONGOING;
                        } else if (item.equals(GC.STATE_TEXT_ATTENDANCE)){
                            status = GC.STATE_ATTENDANCE;
                        }
                        session.setState(status);
                        updateUI(status);
                    }
                },1000);

            }
        });

        btnHistory.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(MainActivity.this,LectureHistory.class));
            }
        });

        // Spinner Drop down elements
        List<String> categories = new ArrayList<String>();
        categories.add(GC.STATE_TEXT_ONGOING);
        categories.add(GC.STATE_TEXT_ATTENDANCE);
        categories.add(GC.STATE_TEXT_DEFAULT);

        spinnerChangeState.setSelected(true);
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, categories);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnerChangeState.setAdapter(dataAdapter);
    }

    private void populateGraph() throws JSONException, ParseException {
        JSONObject obj = new JSONObject(GC.DASH_RATING_OBJ);
        JSONArray data = obj.getJSONArray("data");
        SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");

        DataPoint[] dataPoint = new DataPoint[5];


        for (int i = 0; i < data.length(); i++) {
            JSONObject object = data.getJSONObject(i);
            Date date = dateFormat.parse(object.getString("date"));

            dataPoint[i] = new DataPoint(date, (Double) object.get("rating"));
        }

        LineGraphSeries<DataPoint> series = new LineGraphSeries<>(dataPoint);
        series.setDrawBackground(true);
        series.setDataPointsRadius(10);
        series.setThickness(8);
        graph.addSeries(series);

        // set date label formatter
        graph.getGridLabelRenderer().setLabelFormatter(new DateAsXAxisLabelFormatter(this));
        graph.getGridLabelRenderer().setNumHorizontalLabels(5);

        graph.getViewport().setMinX(dataPoint[4].getX());
        graph.getViewport().setMaxX(dataPoint[0].getX());
        graph.getViewport().setMinY(1);
        graph.getViewport().setMaxY(5);
        graph.getViewport().setYAxisBoundsManual(true);
        graph.getViewport().setXAxisBoundsManual(true);
        graph.getGridLabelRenderer().setHumanRounding(false);
    }

    private void showAvailableCoursesDialog() {

        LayoutInflater inflater = getLayoutInflater();
        View convertView = (View) inflater.inflate(R.layout.comp_list_view, null);
        ListView lv = (ListView) convertView.findViewById(R.id.lv);
        try {
            populateCourseList();
        } catch (JSONException e) {
            e.printStackTrace();
        }
        LVCourses customAdapter = new LVCourses(this, R.layout.list_row_course, courseList);

        lv.setAdapter(customAdapter);
        lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, final int position, long id) {

                // TODO: Send add lecture call

                showDialog();

                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        hideDialog();
                        selectedCourse = courseList.get(position);
                        status = GC.STATE_ONGOING;
                        session.setState(status);
                        spinnerChangeState.setSelection(0);
                        updateUI(status);
                        alert.dismiss();
                    }
                },1000);

            }
        });

        AlertDialog.Builder alertDialog = new AlertDialog.Builder(this)
                .setView(convertView)
                .setNegativeButton(android.R.string.cancel, new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        dialog.dismiss();
                    }
                })
                .setCancelable(false);

        alert = alertDialog.create();
        alert.show();
    }

    private void showAddTopicsDialog() {

        LayoutInflater inflater = getLayoutInflater();
        View convertView = (View) inflater.inflate(R.layout.comp_add_topics, null);

        AlertDialog.Builder alertDialog = new AlertDialog.Builder(this)
                .setView(convertView)
                .setNegativeButton(android.R.string.cancel, new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        dialog.dismiss();
                    }
                })
                .setCancelable(false);

        alert = alertDialog.create();
        alert.show();
    }

    private void populateCourseList() throws JSONException {
        courseList = new ArrayList<Course>();

        JSONObject obj = new JSONObject(GC.COURSE_OBJ);
        JSONArray data = obj.getJSONArray("data");

        for (int i = 0; i < data.length(); i++) {
            courseList.add(new Course(data.getJSONObject(i)));
        }
    }

    @Override
    protected void onResume() {
        super.onResume();

        showDialog();

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                hideDialog();


                status = session.getState();
                updateUI(status);
                graph.setVisibility(View.VISIBLE);
            }
        },1000);

        try {
            populateGraph();
        } catch (JSONException | ParseException e) {
            e.printStackTrace();
        }


    }

    private void updateUI(String status) {

        switch (status) {
            case GC.STATE_DEFAULT:
                btnStartLecture.setVisibility(View.VISIBLE);
                viewChangeState.setVisibility(View.GONE);
                break;
            case GC.STATE_ONGOING:
                btnStartLecture.setVisibility(View.GONE);
                viewChangeState.setVisibility(View.VISIBLE);
                break;
            case GC.STATE_ATTENDANCE:
                btnStartLecture.setVisibility(View.GONE);
                viewChangeState.setVisibility(View.VISIBLE);
                break;
        }
    }

    public void showDialog(){
        dialog.setMessage("Please wait.....");
        dialog.show();
    }

    public void hideDialog(){
        dialog.dismiss();
    }
}
