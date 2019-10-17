<?php
echo "<br>1=".session_status();
echo "<br>2=".(is_null(session_status()));
echo "<br>3=".(NULL==session_status());
echo "<br>4=".(session_status() === PHP_SESSION_NONE);
echo "<br>5=".(session_status() == PHP_SESSION_NONE);
if (session_status() === 1){
    echo "<br>start session...";
    session_start();
    echo "<br>session_status=";
    echo session_status();
    echo "<br>";
    $_SESSION["winTimes"] = 0;
    $_SESSION["currentLoop"] =1;
}

echo "<br>currentLoop1=".$_SESSION["currentLoop"];
$currentLoop=(int)$_SESSION["currentLoop"];
$_SESSION["currentLoop"]=$currentLoop+1;
echo "<br>currentLoop2=".$_SESSION["currentLoop"];

//$_SESSION["currentLoop"] = 1;
//$_SESSION["win"] = false;
?>
<html>
    <head>
        <?php
            if ($currentLoop <= 10)
                echo "<meta http-equiv=\"refresh\" content=\"2\">";
        ?>
    </head>
    <body>
        <table width=100%>
            <tr>
                <td align="center"><font size="6" color="#FF0000">欢迎参加Red Hat会议</font></td>
            </tr>
            <tr>
                <td align="center"><font size="6" color="#FF0000">这是您的第<?=$currentLoop?>抽奖，还可以再抽<?=(10-$currentLoop)?>次</font></td>
            </tr>
            <?php
                if ($currentLoop <=10) {
            ?>
            <tr>
                <td align="center"><font size="10" color="#FF0000">本次您的抽奖序号是</td>
            </tr>
            <tr>
                <td align="center">
                    <font size="10" color="#FF00FF">
                    <?php
                        $result=rand(10,99);
                        echo $result;
                    ?>
                    </font>
                </td>
            </tr>
            <tr>
                <td align="center"><font size="10" color="#FF0000">
                    <?php
                        if ($result==11 || $result==22 || $result==33 || $result==44 || $result==55 || $result==66 || $result==77 || $result==88 || $result==99)
                            echo "恭喜你，中奖了！";
                        else
                            echo "这没中奖，还可以再来一次！";
                    ?>
                </td>
            </tr>
            <?php
                } else {
            ?>
            <tr>
                <td align="center">
                    <font size="10" color="#FF00FF">您的抽奖记录是：</font>
                </td>
            </tr>            
            <?php
                }
            ?>
        </table>
    </body>
<html>
