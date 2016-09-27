<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d9cad2af71cda9fb55b2b69710e2e2985b87f8535e385f12c6671590f19f427b extends Twig_Template
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
        $__internal_c483e0d50bc1988fe3df53efb55639d4898719c38cef183d64fec2867105a1ca = $this->env->getExtension("native_profiler");
        $__internal_c483e0d50bc1988fe3df53efb55639d4898719c38cef183d64fec2867105a1ca->enter($__internal_c483e0d50bc1988fe3df53efb55639d4898719c38cef183d64fec2867105a1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c483e0d50bc1988fe3df53efb55639d4898719c38cef183d64fec2867105a1ca->leave($__internal_c483e0d50bc1988fe3df53efb55639d4898719c38cef183d64fec2867105a1ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
