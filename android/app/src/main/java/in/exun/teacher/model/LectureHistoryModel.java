package in.exun.teacher.model;

import org.json.JSONException;
import org.json.JSONObject;

/**
 * Created by ayush on 04/10/17.
 */

public class LectureHistoryModel {

    private int id;
    private String group, code, date;

    public LectureHistoryModel(JSONObject object) {

        try {
            id = object.getInt("id");
            group = object.getString("branch") + object.getInt("number");
            code = object.getString("code");
            date = object.getString("date");
        } catch (JSONException e) {
            e.printStackTrace();
        }

    }

    public int getId() {
        return id;
    }

    public String getCode() {
        return code;
    }

    public String getGroup() {
        return group;
    }

    public String getDate() {
        return date;
    }
}
