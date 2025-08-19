<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
</head>

<body>
    <div class="form-container">
        <h2 class="form-name">REGISTER YOUR SELF</h2>
        <form action="insert.php" method="POST">
    <input type="hidden" name="id">

    <input type="text" name="firstname" placeholder="First Name" required class="name"> <br><br>

    <input type="text" name="surname" placeholder="Surname" required class="name"><br><br>

    Choose the social media you prefer to use <br>
    <input type="radio" name="socialmedia" value="instagram" required> Instagram <br>
    <input type="radio" name="socialmedia" value="facebook"> Facebook <br>
    <input type="radio" name="socialmedia" value="twitter"> X (Twitter) <br><br>

    <input type="text" placeholder="Username" name="username" required class="name" 
           id="username" title="Enter the name you use on the social media you chose"><br><br>

    <input type="number" name="phonenumber" placeholder="Phone Number" required class="phone"><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

    </div>
    <style>
        * {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(39, 37, 37);

        }

        p {
            color: rgb(10, 10, 10);

            font-family: 'Times New Roman', Times, serif;
        }

        .form-container {

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 600px;
            width: 100vw;

        }

        .name {
            width: 27%;
            height: 13%;
            border-radius: 12px;
            color: rgb(20, 20, 20)
        }

        .phone {
            width: 27%;
            height: 13%;
            border-radius: 12px;
            color: rgb(34, 34, 34);

        }

        .form-name {
            margin-top: 300px;
            color: rgb(22, 22, 22);
        }

        .social {

            width: 8%;
            height: 8%;
            margin-left: -170px;
            border-radius: 12px;
            color: rgb(15, 15, 15);
        }

        button {
            width: 15%;
            height: 15%;
            border-radius: 10px;
            background-color: rgb(121, 223, 38);
        }

        input::placeholder,
        textarea::placeholder {
            color: black;
            font-size: 15px;
            font-family: 'Times New Roman', Times, serif;
        }
        input[ type=radio]{
     width: 8%;
     height: 8%;
        }
    </style>

</body>

</html>