<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_38aecc0c5619d312a90e3c86fede6578ed0e443430e53a2264e67e3165a2d12f extends Twig_Template
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
        $__internal_5b9ef2de68272f8871bdc80f5dd641c3ca7d47a133b6ea128ce67de1ffe232e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9ef2de68272f8871bdc80f5dd641c3ca7d47a133b6ea128ce67de1ffe232e7->enter($__internal_5b9ef2de68272f8871bdc80f5dd641c3ca7d47a133b6ea128ce67de1ffe232e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5b9ef2de68272f8871bdc80f5dd641c3ca7d47a133b6ea128ce67de1ffe232e7->leave($__internal_5b9ef2de68272f8871bdc80f5dd641c3ca7d47a133b6ea128ce67de1ffe232e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
