<table width=100%>
    <tr>
        <td align="center"><font size="6" color="#FF0000">欢迎参加Red Hat会议</font></td>
    </tr>
    <tr>
        <td align="center"><font size="10" color="#FFFF00">您的抽奖序号是</td>
    </tr>
    <tr>
        <td align="center">
            <font size="10" color="#FF00FF">
            <?php
                $result=rand(10,99);
                echo $result;
                if ($result=11 || $result=22 || $result=33 || $result=44 || $result=55 || $result=66 || $result=77 || $result=88 || $result=99)
                    echo "恭喜你，中奖了！";
                else
                    echo "这没中奖，还可以再来一次！";
            ?>
            </font>
        </td>
    </tr>
</table>
