package in.exun.teacher.model;

import org.json.JSONException;
import org.json.JSONObject;

/**
 * Created by ayush on 04/10/17.
 */

public class Course {

    private int id;
    private String group, code;

    public Course(JSONObject object){

        try {
            id = object.getInt("id");
            group = object.getString("branch") + object.getInt("number");
            code = object.getString("code");
        } catch (JSONException e) {
            e.printStackTrace();
        }

    }

    public String getCode() {
        return code;
    }

    public String getGroup() {
        return group;
    }
}
