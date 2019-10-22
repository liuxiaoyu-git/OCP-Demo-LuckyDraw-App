<?php
$totalTime=10;

if (session_status() !== PHP_SESSION_ACTIVE) {
    //echo "<br>start session...";
    session_start();
    $_SESSION["winTimes"]=(int) $_SESSION["winTimes"];
}

$currentLoop=(int) $_SESSION["currentLoop"] + 1;
}
?>
<html>
    <head>
        <?php
            if ($currentLoop <= $totalTime)
                echo "<meta http-equiv=\"refresh\" content=\"2\">";
        ?>
    </head>
    <body>
        <div id="box">
        <table width="100%" height="100%">
            <tr>
                <td align="center"><font size="16" color="#FF0000"><b>欢迎参加Red Hat会议</b></font></td>
            </tr>
            <?php
                if ($currentLoop <=$totalTime) {
            ?>
            <tr>
                <td align="center"><font size="16" color="#FF0011">这是您的第<?=$currentLoop?>抽奖，还可以再抽<?=($totalTime-$currentLoop)?>次</font></td>
            </tr>
            <tr>
                <td align="center"><font size="20" color="#FF1100">本次您的抽奖序号是</td>
            </tr>
            <tr>
                <td align="center">
                    <font size="20" color="#FF00FF">
                    <?php
                        $result=rand(10,99);
                        echo $result;
                    ?>
                    </font>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?php
                        if ($result==11 || $result==22 || $result==33 || $result==44 || $result==55 || $result==66 || $result==77 || $result==88 || $result==99) {
                            echo "<img src=\"smile.png\"><font size=\"20\" color=\"#FF1111\"><b><br>恭喜你，刚刚中奖了！</b></font>";
                            $_SESSION["winTimes"] = (int) $_SESSION["winTimes"] + 1;
                        } else
                            echo "<img src=\"cry.png\"><font size=\"20\" color=\"#FF1111\"><b><br>这没中奖，还可以再来一次！</b></font>";
                    ?>
                </td>
            </tr>
            <?php
                } else {
                    $currentLoop=$totalTime
                    $_SESSION["currentLoop"]=$totalTime; 
            ?>
            <tr>
                <td align="center">
                    <font size="20" color="#FF11FF">您总共抽了 <?=$currentLoop-1?> 次奖，中了 <b><?=$_SESSION["winTimes"]?></b> 次奖！</font>
                </td>
            </tr>            
            <?php
                }
            ?>
        </table>
        </div>
    </body>
</html>
