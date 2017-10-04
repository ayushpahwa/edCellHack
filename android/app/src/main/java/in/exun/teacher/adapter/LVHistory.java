package in.exun.teacher.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.List;

import in.exun.teacher.R;
import in.exun.teacher.model.LectureHistoryModel;

/**
 * Created by ayush on 04/10/17.
 */

public class LVHistory extends ArrayAdapter<LectureHistoryModel> {

    public LVHistory(Context context, int textViewResourceId) {
        super(context, textViewResourceId);
    }

    public LVHistory(Context context, int resource, List<LectureHistoryModel> items) {
        super(context, resource, items);
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        View v = convertView;

        if (v == null) {
            LayoutInflater vi;
            vi = LayoutInflater.from(getContext());
            v = vi.inflate(R.layout.list_row_lecture_history, null);
        }

        TextView grpName = (TextView) v.findViewById(R.id.text_group_name);
        TextView courseName = (TextView) v.findViewById(R.id.text_course_name);
        TextView dateName = (TextView) v.findViewById(R.id.text_date);

        LectureHistoryModel lectureHistory = getItem(position);

        grpName.setText(lectureHistory.getGroup());
        courseName.setText(lectureHistory.getCode());
        dateName.setText(lectureHistory.getDate());

        return v;
    }

}