<h2>Dodaj Pracownika</h2>
<?php echo form::open(isset($action)?'employees/'.$action:''); ?>
<dl>
    <dt>PESEL:</dt>
    <dd><?php echo form::input('pesel', (isset($_POST['pesel'])?$_POST['pesel']:''), array('maxlength' => 11)); ?></dd>
    <dt>Imię:</dt>
    <dd><?php echo form::input('name', (isset($_POST['name'])?$_POST['name']:'')); ?></dd>
    <dt>Nazwisko:</dt>
    <dd><?php echo form::input('surname', (isset($_POST['surname'])?$_POST['surname']:'')); ?></dd>
    <dt>Stanowisko:</dt>
    <dd><?php echo form::input('position', (isset($_POST['position'])?$_POST['position']:'')); ?></dd>
    <dt></dt>
    <dd>
    <?php
        $nazwa = '';
        if (isset($action))
        {
            if ($action == 'edit')
                $nazwa = 'Edytuj';
            else
                $nazwa = 'Dodaj';
        }
        echo form::submit('', $nazwa); 
    ?>
    </dd>
    <input type="hidden" name="old_pesel" value="<?php if (isset($old_pesel)) echo $old_pesel; ?>" />
</dl>
<?php echo form::close(); ?>