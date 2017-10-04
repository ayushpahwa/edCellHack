package in.exun.teacher.activity;

import android.content.DialogInterface;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.ListView;
import android.widget.RelativeLayout;
import android.widget.Spinner;
import android.widget.TextView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import in.exun.teacher.R;
import in.exun.teacher.adapter.LVCourses;
import in.exun.teacher.helper.GC;
import in.exun.teacher.helper.SessionManager;
import in.exun.teacher.model.Course;

public class MainActivity extends AppCompatActivity {

    public SessionManager session;

    public String status;

    public Button btnStartLecture, btnChangeState;
    public Spinner spinnerChangeState;
    public TextView textName;
    public RelativeLayout viewChangeState;
    private AlertDialog alert;
    private List<Course> courseList = new ArrayList<>();
    private Course selectedCourse;

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

        btnStartLecture.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                // TODO: Get all courses of the teacher
                showAvailableCoursesDialog();
            }
        });
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
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {

                // TODO: Send add lecture call

                selectedCourse = courseList.get(position);
                alert.dismiss();

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

        for (int i=0; i < data.length(); i++){
            courseList.add(new Course(data.getJSONObject(i)));
        }
    }

    @Override
    protected void onResume() {
        super.onResume();

        status = session.getState();
        updateUI(status);
    }

    private void updateUI(String status) {

        switch (status) {
            case GC.STATE_DEFAULT:
                btnStartLecture.setVisibility(View.VISIBLE);

                break;
            case GC.STATE_ONGOING:
                break;
            case GC.STATE_ATTENDANCE:
                break;
        }
    }
}
