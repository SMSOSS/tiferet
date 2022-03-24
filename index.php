<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <style>
        body {
            background: #F3E5F5;
        }

        welcome {
            position: absolute;
            left: 13.07%;
            right: 63.2%;
            top: 17.36%;
            bottom: 78.08%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 37px;
            /* identical to box height */


            color: #7B1FA2;
        }

        acc-ques {
            position: absolute;
            left: 13.07%;
            right: 28.8%;
            top: 21.92%;
            bottom: 75.86%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #yes {
            position: absolute;
            left: 5.87%;
            right: 5.6%;
            top: 27.96%;
            bottom: 54.8%;

            background: #E1BEE7;
            border-radius: 20px;

        }

        yestext {
            position: absolute;
            left: 13.07%;
            right: 14.67%;
            top: 33.25%;
            bottom: 60.1%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }

        #no {
            position: absolute;
            left: 5.87%;
            right: 5.6%;
            top: 49.01%;
            bottom: 33.74%;

            background: #E1BEE7;
            border-radius: 20px;
        }

        notext {
            position: absolute;
            left: 13.07%;
            right: 14.67%;
            top: 33.25%;
            bottom: 60.1%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }

        bold {
            font-weight: 700;
        }
    </style>
</head>

<body>
    <welcome>Hello!</welcome>
    <acc-ques>Do you have a tiferet account?</acc-ques>

    <a href="/setup/login.php">
        <div id="yes">
            <yestext>
                <bold>Yes</bold>, I do!<br>Let’s get you up and running after you log in.
            </yestext>
        </div>
    </a>

    <a href="/setup/welcome.php">
        <div id="no">
            <notext>
                <bold>No</bold>, I don’t :( <br>Don’t fret. Let’s get you ready by making an account!
            </notext>
        </div>
    </a>

</body>