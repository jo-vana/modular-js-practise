<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modular</title>
<!--    <link rel="stylesheet" href="style.css">-->
    <!-- JS-->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script src="jquery-3.3.1.min.js"></script>
<!--    <script src="https://raw.githubusercontent.com/janl/mustache.js/master/mustache.js"></script>-->
    <script src="mustache.js"></script>
    <script src="prototype.js"></script>
</head>
<body>

<style>
    body {
        background: #fafafa;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #333;
    }

    .hero-unit {
        margin: 20px auto 0 auto;
        width: 300px;
        font-size: 12px;
        font-weight: 200;
        line-height: 20px;
        background-color: #eee;
        border-radius: 6px;
        padding: 10px 20px;
    }

    .hero-unit h1 {
        font-size: 60px;
        line-height: 1;
        letter-spacing: -1px;
    }

    .browsehappy {
        margin: 0.2em 0;
        background: #ccc;
        color: #000;
        padding: 0.2em 0;
    }

    input {
        border: 1px solid #999;
        border-radius: 4px;
        padding: 10px;
    }
    button {
        zoom: 2;
        background-color: #999;
        border: 1px solid #999;
        border-radius: 4px;
        padding: 1px 5px;

    }

    button.active {
        background-color:rgb(165, 227, 158);
    }
    #peopleModule {
        text-align: center;
    }
    #peopleModule ul {
        padding: 0;
    }
    #peopleModule li {
        display: inline-block;
        list-style-type: none;
        background: #98ec9b;
        border-radius: 5px;
        padding: 3px 8px;
        margin: 5px 0;
        width: 200px;
        opacity: 0.8;
        transition: opacity 0.3s;
    }
    #peopleModule li:hover {
        opacity: 1;
    }
    #peopleModule li span {
        display: inline-block;
        width: 160px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #peopleModule li i {
        cursor: pointer;
        font-weight: bold;
        float: right;
        font-style: normal;
        background: #666;
        padding: 2px 4px;
        font-size: 60%;
        color: white;
        border-radius: 20px;
        opacity: 0.7;
        transition: opacity 0.3s;
        margin-top: 3px;
    }

    #peopleModule li i:hover {
        opacity: 1;
    }

</style>
    <div id="peopleModule">
        <h1>People</h1>
        <input placeholder="name" type="text">
        <button id="addPerson">Add Person</button>
        <ul id="people">
            <script id="people-template" type="text/template">
                {{#people}}
                <li>
                    <span>{{.}}</span>
                    <i class="del">X</i>
                </li>
                {{/people}}
            </script>
        </ul>


    </div>
    <button>Get Random Person</button>​
     <input type="text">​

<script src="modular.js"></script>
<script src="bind.js"></script>
</body>
</html>