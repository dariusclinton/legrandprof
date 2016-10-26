<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_890018019fb7ff66384f7de162c5fc59bf207501c0c5d772cc314fde2a7d6ee7 extends Twig_Template
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
        $__internal_b09dfdfe8d5294d76363eb192514b388a0336e6a3fa3c148149db163de001348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09dfdfe8d5294d76363eb192514b388a0336e6a3fa3c148149db163de001348->enter($__internal_b09dfdfe8d5294d76363eb192514b388a0336e6a3fa3c148149db163de001348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b09dfdfe8d5294d76363eb192514b388a0336e6a3fa3c148149db163de001348->leave($__internal_b09dfdfe8d5294d76363eb192514b388a0336e6a3fa3c148149db163de001348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
