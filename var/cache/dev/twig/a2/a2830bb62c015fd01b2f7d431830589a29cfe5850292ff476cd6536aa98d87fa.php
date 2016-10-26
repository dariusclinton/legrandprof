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
        $__internal_c884eb2c993f27d9673618b613ecbb41ee73b91eb20958bd12c1ee2ff51fe226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c884eb2c993f27d9673618b613ecbb41ee73b91eb20958bd12c1ee2ff51fe226->enter($__internal_c884eb2c993f27d9673618b613ecbb41ee73b91eb20958bd12c1ee2ff51fe226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c884eb2c993f27d9673618b613ecbb41ee73b91eb20958bd12c1ee2ff51fe226->leave($__internal_c884eb2c993f27d9673618b613ecbb41ee73b91eb20958bd12c1ee2ff51fe226_prof);

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
