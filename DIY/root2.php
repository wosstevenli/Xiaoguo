<?php
/*
1,�������ݿ������
2���������ݿ�
3����������
4��ִ��sql���
5�������õ����յ����ݿ��¼���

����һЩ�������ݿⰲȫ�Ķ���

*/

$link = mysql_connect("localhost", "root", "root");
if(!$link)
{
//���Ӳ��ɹ�
echo "�������ݿ�ʧ�ܣ�";
exit;
}
/*
//ѡ�����ݿ�
mysql_select_db("test" ,$link);

//��������
mysql_query("SET NAMES 'gbk'",$link);

//�����ǵ����ݿ���в���
mysql_query("INSERT INTO admin(usename,password) VALUES("����","111111")");


//���ݿ����
mysql_query("UPDATE admin SET usename='abc' WHERE usename='����'");
*/
mysql_close($link);

?>