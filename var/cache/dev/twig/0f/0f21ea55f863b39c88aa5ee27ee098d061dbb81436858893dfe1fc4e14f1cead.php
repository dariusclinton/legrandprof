<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8ed1cff635e1220baa55b37c22a38245cba6c1b5b7b534ae60fa806c8c1ab1f5 extends Twig_Template
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
        $__internal_59449a9533b53980e190daeb4d13749da7365b404090f5eb498a7c75b79f43ea = $this->env->getExtension("native_profiler");
        $__internal_59449a9533b53980e190daeb4d13749da7365b404090f5eb498a7c75b79f43ea->enter($__internal_59449a9533b53980e190daeb4d13749da7365b404090f5eb498a7c75b79f43ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_59449a9533b53980e190daeb4d13749da7365b404090f5eb498a7c75b79f43ea->leave($__internal_59449a9533b53980e190daeb4d13749da7365b404090f5eb498a7c75b79f43ea_prof);

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
