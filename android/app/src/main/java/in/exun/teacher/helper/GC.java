package in.exun.teacher.helper;

/**
 * Created by ayush on 04/10/17.
 */

public class GC {


    public static final String STATE_DEFAULT = "DEFAULT";
    public static final String STATE_TEXT_DEFAULT = "End Lecture";
    public static final String STATE_ONGOING = "ONGOING";
    public static final String STATE_TEXT_ONGOING = "Ongoing";
    public static final String STATE_ATTENDANCE = "ATTENDANCE";
    public static final String STATE_TEXT_ATTENDANCE = "Take Attendance";
    public static final String COURSE_OBJ = "{\"data\":[{\"id\":1,\"code\":\"UCS405\",\"branch\":\"CAG\",\"number\":3},\n" +
            "\t\t{\"id\":2,\"code\":\"UCS103\",\"branch\":\"SE\",\"number\":1},\n" +
            "\t\t{\"id\":3,\"code\":\"UCS321\",\"branch\":\"CML\",\"number\":2}]}";
    public static final String DASH_RATING_OBJ = "{\"data\": [" +
            "\t\t{\"date\":\"2017-10-02\",\"rating\":1.8},\n" +
            "\t\t{\"date\":\"2017-10-01\",\"rating\":2.4},\n" +
            "\t\t{\"date\":\"2017-09-30\",\"rating\":4.9},\n" +
            "\t\t{\"date\":\"2017-09-29\",\"rating\":3.9},\n" +
            "\t\t{\"date\":\"2017-09-28\",\"rating\":4.3}]}";
    public static final String HISTORY_OBJ = "{\"data\": [{\"id\":1,\"code\":\"UCS405\",\"date\":\"2017-10-03\",\"branch\":\"CAG\",\"number\":3},\n" +
            "\t\t{\"id\":2,\"code\":\"UCS103\",\"date\":\"2017-10-02\",\"branch\":\"SE\",\"number\":1},\n" +
            "\t\t{\"id\":3,\"code\":\"UCS321\",\"date\":\"2017-10-02\",\"branch\":\"CML\",\"number\":2},\n" +
            "\t\t{\"id\":4,\"code\":\"UCS405\",\"date\":\"2017-10-01\",\"branch\":\"CAG\",\"number\":3},\n" +
            "\t\t{\"id\":5,\"code\":\"UCS103\",\"date\":\"2017-10-01\",\"branch\":\"SE\",\"number\":1},\n" +
            "\t\t{\"id\":6,\"code\":\"UCS321\",\"date\":\"2017-10-01\",\"branch\":\"CML\",\"number\":2},\n" +
            "\t\t{\"id\":7,\"code\":\"UCS405\",\"date\":\"2017-10-01\",\"branch\":\"CAG\",\"number\":3},\n" +
            "\t\t{\"id\":8,\"code\":\"UCS103\",\"date\":\"2017-10-01\",\"branch\":\"SE\",\"number\":1},\n" +
            "\t\t{\"id\":9,\"code\":\"UCS321\",\"date\":\"2017-09-30\",\"branch\":\"CML\",\"number\":2},\n" +
            "\t\t{\"id\":10,\"code\":\"UCS321\",\"date\":\"2017-09-30\",\"branch\":\"CML\",\"number\":2}]\n" +
            "}";
    public static final String STAT_OBJECT = "{\"id\": 1,\"no_of_present\": 43,\n" +
            "\t\"experience_graph\" : [1,10,13,9,11],\n" +
            "\t\"clarity_graph\" : [\n" +
            "\t\t{\"topic\" : \"FSM\",\"rating\" : 4.3},\n" +
            "\t\t{\"topic\" : \"NFA\",\"rating\" : 5.0},\n" +
            "\t\t{\"topic\" : \"DFA\",\"rating\" : 4.1},\n" +
            "\t\t{\"topic\" : \"NFA to DFA\",\"rating\" : 1.8},\n" +
            "\t\t{\"topic\" : \"Regex to DFA\",\"rating\" : 2.1}]\n" +
            "}";
}
