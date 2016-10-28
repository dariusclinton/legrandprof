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
        $__internal_0bea27a0233738596da834bfeba320f7401e02676a6c75f21f437e18fd61d347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bea27a0233738596da834bfeba320f7401e02676a6c75f21f437e18fd61d347->enter($__internal_0bea27a0233738596da834bfeba320f7401e02676a6c75f21f437e18fd61d347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0bea27a0233738596da834bfeba320f7401e02676a6c75f21f437e18fd61d347->leave($__internal_0bea27a0233738596da834bfeba320f7401e02676a6c75f21f437e18fd61d347_prof);

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
