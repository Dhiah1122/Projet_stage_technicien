<?php
include("dbc.php");
$a='Foot';
$b='Cyclisme';
$c='Box ';
$d='Judo';
$e='Karaté';
$f='Basket-ball';
$g='Athlétisme';
$h='Gymnastique rythmique';

if(isset ($_POST['a']))
{
$sql = "INSERT INTO  type_activite (type) values('$a')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}
    
if(isset ($_POST['b']))
{
$sql = "INSERT INTO  type_activite (type) values('$b')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}
    
if(isset ($_POST['c']))
{
$sql = "INSERT INTO  type_activite (type) values('$c')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}

if(isset ($_POST['d']))
{
$sql = "INSERT INTO  type_activite (type) values('$d')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}

if(isset ($_POST['e']))
{
$sql = "INSERT INTO  type_activite (type) values('$e')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}
if(isset ($_POST['f']))
{
$sql = "INSERT INTO  type_activite (type) values('$f')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}

if(isset ($_POST['g']))
{
$sql = "INSERT INTO  type_activite (type) values('$g')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}

if(isset ($_POST['h']))
{
$sql = "INSERT INTO  type_activite (type) values('$h')";
if (($conn->query($sql) === true))
{
    echo "ok c'est bon";
}
    else
    {
        echo "dzl";
    }
}

?>