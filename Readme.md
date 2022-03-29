# MainActivity.java code #

```
package com.example.tiferet;

import androidx.appcompat.app.AppCompatActivity;

import android.app.Activity;
import android.content.Context;
import android.os.Bundle;
import android.view.KeyEvent;
import android.webkit.JavascriptInterface;
import android.webkit.WebResourceRequest;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {

    private WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        CustomWebViewClient client = new CustomWebViewClient(this);
        webView = findViewById(R.id.webView);
        webView.setWebViewClient(client);
        webView.addJavascriptInterface(new AndroidJS(this),"Android");
        webView.getSettings().setJavaScriptEnabled(true);
        webView.loadUrl("http://192.168.1.7:8080/");

    }

    @Override
    public boolean onKeyDown(int keyCode , KeyEvent event){
        if (keyCode == KeyEvent.KEYCODE_BACK && this.webView.canGoBack()){
            this.webView.goBack();
            return true;
        }
        return super.onKeyDown(keyCode, event);
    }
}

class CustomWebViewClient extends WebViewClient{
    private Activity activity;

    public CustomWebViewClient(Activity activity){
        this.activity = activity;
    }

    @Override
    public boolean shouldOverrideUrlLoading(WebView webView , String url){
        return false;
    }

    @Override
    public boolean shouldOverrideUrlLoading(WebView webView , WebResourceRequest request){
        return false;
    }
}
```

# AndriodJs.java code #

```
public class AndroidJS {
    private final Context context;

    public AndroidJS(Context context){
        this.context = context;
    }

    @JavascriptInterface
    public void send_notification(String msg){

        if(Build.VERSION.SDK_INT >= Build.VERSION_CODES.O){
            NotificationChannel channel = new NotificationChannel("notify" , "notify" , NotificationManager.IMPORTANCE_DEFAULT);
            NotificationManager manager = context.getSystemService(NotificationManager.class);
            manager.createNotificationChannel(channel);
        }



        NotificationCompat.Builder builder = new NotificationCompat.Builder(context , "notify")
                .setPriority(NotificationCompat.PRIORITY_HIGH)
                .setContentTitle("tiferet")
                .setContentText(msg)
                .setSmallIcon(R.raw.icon);

        NotificationManagerCompat notificationManager = NotificationManagerCompat.from(context);

        notificationManager.notify(1 , builder.build());
    }
}
```