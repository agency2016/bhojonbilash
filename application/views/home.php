
<a href="http://localhost/agencyDelta/bhojonbilash/index.php/home/index/1">English</a> |
<a href="http://localhost/agencyDelta/bhojonbilash/index.php/home/index/2">Bangla</a>

<?php
var_dump(get_string('dashboard'));
echo "<h1>".  get_string('dashboard')."</h1>";

?>

                <li class="switch">
                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla')? 1:0; ?>" name="view" value="bangla" id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>
                        <label for="week" class="switch-label switch-label-off">বাংলা</label>
                        <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english')? 1:0; ?>" name="view" value="english" id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>
                        <label for="month" class="switch-label switch-label-on">En</label>
                        <span class="switch-selection"></span>
                    </li>