package in.exun.teacher.activity;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.TextView;

import in.exun.teacher.R;

public class StatsActivity extends AppCompatActivity {

    String code, group, date;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_stats);
        Bundle extras = getIntent().getExtras();

        if (extras!=null){
           code = extras.getString("code");
           date = extras.getString("date");
           group = extras.getString("group");
        }

        init();
    }

    private void init() {

        TextView textCode = (TextView) findViewById(R.id.text_code);
        TextView textGroup = (TextView) findViewById(R.id.text_group);
        TextView textDate = (TextView) findViewById(R.id.text_date);

        textCode.setText(code);
        textGroup.setText(group);
        textDate.setText(date);
    }
}
