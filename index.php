<html>
    <body>
        <div id="box">
        <table width="100%" height="100%">
            <tr>
                <td align="center"><font size="16" color="#FF0000"><b>欢迎参加Red Hat会议</b></font></td>
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
                <td align="center"><font size="20" color="#FF00FF">
                    <?php
                        if ($result==11 || $result==22 || $result==33 || $result==44 || $result==55 || $result==66 || $result==77 || $result==88 || $result==99) {
                            echo "<b>恭喜你，刚刚中奖了！</b>";
                        } else
                            echo "<b><br>这没中奖，还可以再来一次！</b>";
                    ?>
                </font></td>
            </tr>
        </table>
        </div>
    </body>
</html>
