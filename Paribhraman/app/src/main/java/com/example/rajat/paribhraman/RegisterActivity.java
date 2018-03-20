package com.example.rajat.paribhraman;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class RegisterActivity extends AppCompatActivity {

    EditText passwd;
    EditText confpasswd;
    EditText Name;
    EditText Address;
    EditText Mobno;
    EditText Email;
    EditText Addhar;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        Button submitbutton= (Button)findViewById(R.id.Submit);
        Name = (EditText)findViewById(R.id.Name);
        Address = (EditText)findViewById(R.id.Address);
        Mobno = (EditText)findViewById(R.id.Mobno);
        Email = (EditText)findViewById(R.id.email);
        Addhar = (EditText)findViewById(R.id.addhar);
        passwd = (EditText)findViewById(R.id.passwd);
        confpasswd = (EditText)findViewById(R.id.confpasswd);



        submitbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                String name = passwd.getText().toString();
                String address = passwd.getText().toString();
                String mobno = passwd.getText().toString();
                String email = passwd.getText().toString();
                String addhar = passwd.getText().toString();
                String spasswd = passwd.getText().toString();
                String sconfpasswd = confpasswd.getText().toString();
                boolean cancel = false;
                View focusView = null;

                if (TextUtils.isEmpty(name)) {
                    Name.setError("Enter Your Name");
                    focusView = Name;
                    cancel = true;
                }
                if (TextUtils.isEmpty(addhar)) {
                    Address.setError("Enter Your Address");
                    focusView = Address;
                    cancel = true;
                }

                if (TextUtils.isEmpty(mobno)) {
                    Mobno.setError("Enter Your Mobile Number");
                    focusView = Mobno;
                    cancel = true;
                }

                if (TextUtils.isEmpty(email)) {
                    Email.setError("Enter Your Email");
                    focusView = Email;
                    cancel = true;
                }

                if (TextUtils.isEmpty(addhar)) {
                    Addhar.setError("Enter Your Addhar");
                    focusView = Addhar;
                    cancel = true;
                }

                if (TextUtils.isEmpty(spasswd) && TextUtils.isEmpty(sconfpasswd)) {
                    passwd.setError(getString(R.string.error_invalid_password));
                    focusView = passwd;
                    cancel = true;
                }

                if(spasswd != null && sconfpasswd != null){
                    Intent startIntent = new Intent(getApplicationContext(), DiscoveryActivity.class);
                    startActivity(startIntent);
                    //Toast.makeText(RegisterActivity.this, "Please Enter valid Details", Toast.LENGTH_LONG).show();
                }
                else if (spasswd.equals(sconfpasswd)) {
                    Toast.makeText(RegisterActivity.this, "Please Enter valid Details", Toast.LENGTH_LONG).show();
                }
            }

            private boolean isPasswordValid(String password) {
                return password.length() > 4;
            }
        });
    }
}
