<?php
    header('Content-Type: text/html; charset=utf-8');

    $server = "localhost"; // ��� ����� (���������� � ����������), ���� �������� �� ��������� �������, �� ��������� localhost
    $username = "���_������������_��"; // ��� ������������ ��
    $password = "������_������������_��"; // ������ ������������. ���� � ������������ ���� ������ ��, ��������� ������ �������� ""
    $database = "���_����_������"; // ��� ���� ������, ������� �������

    // ����������� � ���� ������ ����� MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);

    // ���������, ���������� ����������.
    if ($mysqli->connect_errno) {
        die("<p><strong>������ ����������� � ��</strong></p><p><strong>��� ������: </strong> ". $mysqli->connect_errno ." </p><p><strong>�������� ������:</strong> ".$mysqli->connect_error."</p>");
    }

    // ������������� ��������� �����������
    $mysqli->set_charset('utf8');

?>