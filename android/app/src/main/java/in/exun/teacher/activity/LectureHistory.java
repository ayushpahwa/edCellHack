package in.exun.teacher.activity;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import in.exun.teacher.R;
import in.exun.teacher.adapter.LVHistory;
import in.exun.teacher.helper.GC;
import in.exun.teacher.model.LectureHistoryModel;

public class LectureHistory extends AppCompatActivity {

    ListView lvHistory;
    private List<LectureHistoryModel> historyList = new ArrayList<>();
    private ProgressDialog dialog;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lecture_history);

        init();
    }

    private void init() {

        lvHistory = (ListView) findViewById(R.id.lvHistory);
        dialog = new ProgressDialog(this);

        showDialog();

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                hideDialog();
                try {
                    populateHistoryList();
                } catch (JSONException e) {
                    e.printStackTrace();
                }
                LVHistory customAdapter = new LVHistory(LectureHistory.this, R.layout.list_row_course, historyList);

                lvHistory.setAdapter(customAdapter);

            }
        },1000);

        lvHistory.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, final int position, long id) {

                // TODO: Send add lecture call

                showDialog();

                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        hideDialog();

                        LectureHistoryModel data = historyList.get(position);

                        Intent i = new Intent(LectureHistory.this,StatsActivity.class);
                        i.putExtra("code",data.getCode());
                        i.putExtra("group",data.getGroup());
                        i.putExtra("date",data.getDate());
                        startActivity(i);
                    }
                },1000);

            }
        });
    }

    private void populateHistoryList() throws JSONException {
        historyList = new ArrayList<LectureHistoryModel>();

        JSONObject obj = new JSONObject(GC.HISTORY_OBJ);
        JSONArray data = obj.getJSONArray("data");

        for (int i = 0; i < data.length(); i++) {
            historyList.add(new LectureHistoryModel(data.getJSONObject(i)));
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
