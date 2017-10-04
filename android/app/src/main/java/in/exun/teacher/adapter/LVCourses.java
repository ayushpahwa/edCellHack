package in.exun.teacher.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.List;

import in.exun.teacher.R;
import in.exun.teacher.model.Course;

/**
 * Created by ayush on 04/10/17.
 */

public class LVCourses extends ArrayAdapter<Course> {

    public LVCourses(Context context, int textViewResourceId) {
        super(context, textViewResourceId);
    }

    public LVCourses(Context context, int resource, List<Course> items) {
        super(context, resource, items);
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        View v = convertView;

        if (v == null) {
            LayoutInflater vi;
            vi = LayoutInflater.from(getContext());
            v = vi.inflate(R.layout.list_row_course, null);
        }

        TextView grpName = (TextView) v.findViewById(R.id.text_group_name);
        TextView courseName = (TextView) v.findViewById(R.id.text_course_name);

        Course course = getItem(position);

        grpName.setText(course.getGroup());
        courseName.setText(course.getCode());

        return v;
    }

}