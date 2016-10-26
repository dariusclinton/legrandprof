<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_30f800bd776fcb92ab8092a7efe6b4aea8e4a3107e5c823f5b2b65e2a3d260f7 extends Twig_Template
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
        $__internal_c2050e31142c612f21cee1826074026ce5f22bbd46cd7b4cd4338f74cd8f36dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2050e31142c612f21cee1826074026ce5f22bbd46cd7b4cd4338f74cd8f36dd->enter($__internal_c2050e31142c612f21cee1826074026ce5f22bbd46cd7b4cd4338f74cd8f36dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c2050e31142c612f21cee1826074026ce5f22bbd46cd7b4cd4338f74cd8f36dd->leave($__internal_c2050e31142c612f21cee1826074026ce5f22bbd46cd7b4cd4338f74cd8f36dd_prof);

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
