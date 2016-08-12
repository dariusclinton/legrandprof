<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cb9d501e66609c5cd7679ca083273e0089cc27fa6e38a6ba1b567b531ce72eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36f75610fc9c2243817d9cd0c2be46584d64159453b4094fb1fa7265b9356cdb = $this->env->getExtension("native_profiler");
        $__internal_36f75610fc9c2243817d9cd0c2be46584d64159453b4094fb1fa7265b9356cdb->enter($__internal_36f75610fc9c2243817d9cd0c2be46584d64159453b4094fb1fa7265b9356cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_36f75610fc9c2243817d9cd0c2be46584d64159453b4094fb1fa7265b9356cdb->leave($__internal_36f75610fc9c2243817d9cd0c2be46584d64159453b4094fb1fa7265b9356cdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
