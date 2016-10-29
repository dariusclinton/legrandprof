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
        $__internal_ad05ccbba323b5afcb561c6d8318ecaf00a7f59f1739e0a61078e157969c0d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad05ccbba323b5afcb561c6d8318ecaf00a7f59f1739e0a61078e157969c0d7d->enter($__internal_ad05ccbba323b5afcb561c6d8318ecaf00a7f59f1739e0a61078e157969c0d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ad05ccbba323b5afcb561c6d8318ecaf00a7f59f1739e0a61078e157969c0d7d->leave($__internal_ad05ccbba323b5afcb561c6d8318ecaf00a7f59f1739e0a61078e157969c0d7d_prof);

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
