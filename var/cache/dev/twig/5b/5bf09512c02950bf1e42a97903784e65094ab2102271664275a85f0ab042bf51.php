<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c723436b638dcdb802a425af312567571d46f95f53fec69e761e2e6524dcad44 extends Twig_Template
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
        $__internal_cdadd988d7161289b5c7a812e5008ee5f127ccd65768d035a341d4a4ba2f0d5d = $this->env->getExtension("native_profiler");
        $__internal_cdadd988d7161289b5c7a812e5008ee5f127ccd65768d035a341d4a4ba2f0d5d->enter($__internal_cdadd988d7161289b5c7a812e5008ee5f127ccd65768d035a341d4a4ba2f0d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cdadd988d7161289b5c7a812e5008ee5f127ccd65768d035a341d4a4ba2f0d5d->leave($__internal_cdadd988d7161289b5c7a812e5008ee5f127ccd65768d035a341d4a4ba2f0d5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
