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
        $__internal_63c1c0eeb7abe39ea97eec86d522a9cbc8e258d68c0927db16da6291d82e9c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c1c0eeb7abe39ea97eec86d522a9cbc8e258d68c0927db16da6291d82e9c98->enter($__internal_63c1c0eeb7abe39ea97eec86d522a9cbc8e258d68c0927db16da6291d82e9c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_63c1c0eeb7abe39ea97eec86d522a9cbc8e258d68c0927db16da6291d82e9c98->leave($__internal_63c1c0eeb7abe39ea97eec86d522a9cbc8e258d68c0927db16da6291d82e9c98_prof);

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
