
<?php
/*$link = mysql_connect ( "localhost", "root", "root" ) ;
if ( !$link ) die ( "����MySQL������ʧ�ܣ�" . mysql_error() ) ;
echo "����MySQL�������ɹ���" ;
mysql_close ( $link ) ; 
*/

 /*$q=2;
 if ($q=2)
    echo "��ȷ";
    else
    echo "����";
*/
/*
<?php
    $lianjie = mysql_connect("localhost", "root", "root")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
    mysql_close($lianjie);
?> 
*/


/*

1,�������ݿ������
2���������ݿ�
3����������
4��ִ��sql���
5�������õ����յ����ݿ��¼���

����һЩ�������ݿⰲȫ�Ķ���



$link = mysql_connect("localhost", "root", "root");
if(!$link)
{
//���Ӳ��ɹ�
echo "�������ݿ�ʧ�ܣ�";
exit;
}



//ѡ�����ݿ�
mysql_select_db("test" ,$link);

//��������
mysql_query("SET NAMES 'gbk'",$link);

//�����ǵ����ݿ���в���
mysql_query("INSERT INTO admin(usename,password) VALUES("����","111111")");


//���ݿ����
mysql_query("UPDATE admin SET usename='abc' WHERE usename='����'");


mysql_close($link);
*/

?>

