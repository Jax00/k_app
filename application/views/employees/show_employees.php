<table border="2">
    <tr>
        <td>PESEL</td>
        <td>Imię</td>
        <td>Nazwisko</td>
        <td>Stanowisko</td>
    </tr>
    <?php
        if (isset($employees))
        {
            foreach($employees as $employee)
            {
                echo '<tr>';
                echo '<td>'.$employee['PESEL'].'</td>';
                echo '<td>'.$employee['imie'].'</td>';
                echo '<td>'.$employee['nazwisko'].'</td>';
                echo '<td>'.$employee['stanowisko'].'</td>';
                echo '<td>'.html::anchor('employees/edit_employee/'.$employee['PESEL'], 'Edytuj').'</td>';
                echo '<td>'.html::anchor('employees/delete/'.$employee['PESEL'], 'Usuń').'</td>';
                echo '</tr>';
            }
        }
    ?>
</table>