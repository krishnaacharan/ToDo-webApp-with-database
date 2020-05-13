* {
    margin: 0px;
}

.container {
    width: 80%;
    height: 100%;
    background-color: #28334AFF;
}

.bottom {
    background-color: #28334AFF;
}

.top {
    width: 100%;
    background-color: #FBDE44FF;
    height: 150px;
    align-items: center;
}

.top a {
    position: absolute;
    top: 30px;
}

.top h1 {
    position: absolute;
    left: 38%;
    top: 10%;
}

.content {
    height: 100%;
}

.sub_btn {
    position: fixed;
    bottom: 15px;
}

.txt {
    position: fixed;
    width: 70%;
    bottom: 15px;
    left: 220px;
    height: 30px;
    text-align: center;
}

#toggle {
    display: none;
    transition: 2s;
}

.up {
    width: 100%;
    background-color: orange;
    position: fixed;
}

.nav_bar {
    display: none;
    background-color: #F65058FF;
    position: fixed;
    left: 0;
    top: 20px;
    height: 95%;
    width: 200px;
    transition: 1s;
    border-radius: 5px;
    text-decoration: none;
}

#toggle:checked+.nav_bar {
    display: inline-block;
    transition: 2s;
}

#done:checked+.lines {
    text-decoration: line-through;
    color: greenyellow;
}

#done {
    display: none;
}

.dele {
    float: right;
    background-color: aliceblue;
}

.lines {
    padding: 2px;
    border: 0.5px rgb(212, 221, 127) solid;
    font-size: 20px;
    border-radius: 5px;
    margin-top: 2px;
}

.error {
    color: red;
}

.nav_bar ul {
    list-style-type: none;
}

a:link,
a:visited {
    background-color: #f44336;
    color: white;
    padding: 4px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover,
a:active {
    background-color: red;
}
