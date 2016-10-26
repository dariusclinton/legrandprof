<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b430e4c1e65e26fb1651084dcead6bc7a250e23a310e15aa75cfe4dde0c280dc extends Twig_Template
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
        $__internal_de51390201634074728c022b02a1df6c6237af5c8158720fc25cb251e42e0b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de51390201634074728c022b02a1df6c6237af5c8158720fc25cb251e42e0b14->enter($__internal_de51390201634074728c022b02a1df6c6237af5c8158720fc25cb251e42e0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_de51390201634074728c022b02a1df6c6237af5c8158720fc25cb251e42e0b14->leave($__internal_de51390201634074728c022b02a1df6c6237af5c8158720fc25cb251e42e0b14_prof);

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
