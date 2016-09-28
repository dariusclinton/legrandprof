<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0ebc701f80c40d29b9116c68bbce9872e27cc783915525f29929a0acad9c7e15 extends Twig_Template
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
        $__internal_8382274ad18588082e33f4723f5584a192c6c10dce03b121f82dbc689a2a5b8e = $this->env->getExtension("native_profiler");
        $__internal_8382274ad18588082e33f4723f5584a192c6c10dce03b121f82dbc689a2a5b8e->enter($__internal_8382274ad18588082e33f4723f5584a192c6c10dce03b121f82dbc689a2a5b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8382274ad18588082e33f4723f5584a192c6c10dce03b121f82dbc689a2a5b8e->leave($__internal_8382274ad18588082e33f4723f5584a192c6c10dce03b121f82dbc689a2a5b8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
