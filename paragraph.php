<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
                
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        @keyframes slideIn {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        body {
            background-color: rgb(233, 232, 232);
            font-family: Arial, sans-serif;
        }


        .logo h4 {
            font-size: 22px;
            color: white;
            margin: 0;
        }


        #form1 {
            width: 1000px;
            background-color: white;
            border-radius: 20px;
            margin: -70px auto 0;
            padding: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 1.5s ease-in-out;
            z-index: 2;
            position: relative;
        }

        #form1 h1 {
            font-size: 28px;
            color: #F53D68;
            text-align: center;
            margin-bottom: 30px;
        }

        textarea,
        input[type="number"],
        select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
            text-align: left;
        }

        textarea:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #F53D68;
            box-shadow: 0 0 5px rgba(245, 61, 104, 0.5);
        }

        textarea {
            height: 250px;
            resize: none;
            font-size: 25px;
        }

        input[type="submit"] {
            padding: 12px 20px;
            border: none;
            background-color: #F53D68;
            color: white;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            width: 200px;
            margin-bottom: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d03b48;
            transform: scale(1.02);
        }
        .logo {
            background-color: #F53D68;
            width: calc(100% - 30px);
            height: 400px;
            border-radius: 20px;
            margin: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
            animation: fadeIn 1.5s ease-in-out;
        }

        #questhive {
            font-size: 80px;
            color: white;
            font-weight: bold;
            margin: 10px;
            animation: bounce 2s ease-in-out infinite;
            display: flex;
            align-items: center;
        }

        .logo p  {
            font-size: 20px;
            color: white;
            margin: 5px 0;
        }
        .logo h4  {
            font-size: 22px;
            color: white;
            margin: 0;
        }

        
        #logout {
            width: 80px;
            padding: 9px 10px;
            text-align: center;
            background-color: white;
            border: 1px solid #F53D68;
            color: #5f5d5d;
            font-size: 18px;
            border-radius: 10px;
            text-decoration: none;
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 15px;
        }

        #noq
        {
           
            width: 25%;
        }
        .input-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            width: 100%;
        }

        

        #submit {
            padding: 12px 20px;
            border: none;
            background-color: #F53D68;
            color: white;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            width: 200px;
            margin-bottom: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        #submit:hover {
            background-color: #d03b48;
            transform: scale(1.02);
        }

                
        @media (max-width: 768px) {
            #form1 {
                width: 90%;
            }

            #questhive {
                font-size: 40px;
            }

            .logo h4 {
                font-size: 18px;
            }

            .game a {
                font-size: 18px;
            }
        }



    </style>
</head>
<body>
    <div class="logo">
        <div class="game">
            <a  id="logout" href="generate.php" >Back</a>
            </div>
    
        <div id="questhive">
            Questhive
            <img src="images/image2.png" alt="logo" style="width: 50px; height: 50px; margin-left: 10px;">
        </div>
        <h4>Learn to lead</h4>
        <p>Automated Question Generator</p>
    </div>
    
    <div id="form1">
    <h1>Generate Paragraph Questions</h1>
    <form method="post" action="paragraph_results.php">
        <textarea name="itext" id="itext" placeholder="Enter the Paragraph" required></textarea><br/>
        

        <div class="input-container">
            <input type="number" id="noq" placeholder="Number of Questions" name="noq" required>
            <select id="noq" name="difficulty" required>
                <option value="">Select Difficulty</option>
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
            </select>
        </div>
        
        <br>
        <center><button type="submit" id="submit">Generate</button></center>
    </form></div> 
</body>
</html>