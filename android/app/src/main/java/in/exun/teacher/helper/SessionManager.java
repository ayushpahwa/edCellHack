package in.exun.teacher.helper;

import android.content.Context;
import android.content.SharedPreferences;
import android.util.Log;

/**
 * Created by ayush on 04/10/17.
 */

public class SessionManager {
    // Shared preferences file name
    private static final String PREF_LOGIN = "AndroidConstants";
    private static final String KEY_IS_LOGGED_IN = "isLoggedIn";
    private static final String KEY_STATE = "state";

    // LogCat tag
    private static String TAG = SessionManager.class.getSimpleName();

    // Shared Preferences
    SharedPreferences pref;
    SharedPreferences.Editor editor;
    Context _context;

    // Shared pref mode
    int PRIVATE_MODE = 0;

    public SessionManager(Context context) {
        this._context = context;
        //pref = PreferenceManager.getDefaultSharedPreferences(_context);
        pref = _context.getSharedPreferences(PREF_LOGIN, PRIVATE_MODE);
        editor = pref.edit();
    }

    public void setState(String state) {

        editor.putString(KEY_STATE, state);

        // commit changes
        editor.commit();
    }

    public String getState(){
        return pref.getString(KEY_STATE, GC.STATE_DEFAULT);
    }

    public void setLogin(boolean isLoggedIn) {

        editor.putBoolean(KEY_IS_LOGGED_IN, isLoggedIn);

        // commit changes
        editor.commit();

        Log.d(TAG, "User login session modified! to " + isLoggedIn);
    }

    public boolean isLoggedIn(){
        return pref.getBoolean(KEY_IS_LOGGED_IN, false);
    }

}