<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dfd9684f0b71722d694f07559912a1633e193d584bc44ba34c351734768abe6d extends Twig_Template
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
        $__internal_d5131aeceb89b9cab696375e6128faf669143a91de3c25c6e024ff84ce8c479a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5131aeceb89b9cab696375e6128faf669143a91de3c25c6e024ff84ce8c479a->enter($__internal_d5131aeceb89b9cab696375e6128faf669143a91de3c25c6e024ff84ce8c479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d5131aeceb89b9cab696375e6128faf669143a91de3c25c6e024ff84ce8c479a->leave($__internal_d5131aeceb89b9cab696375e6128faf669143a91de3c25c6e024ff84ce8c479a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
