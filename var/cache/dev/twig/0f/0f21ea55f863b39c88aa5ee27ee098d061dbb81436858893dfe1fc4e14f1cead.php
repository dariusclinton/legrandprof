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
        $__internal_d47a53c41131b40ceee3f2644d4baea851a74f3cefb3a14663de4ba8575d4519 = $this->env->getExtension("native_profiler");
        $__internal_d47a53c41131b40ceee3f2644d4baea851a74f3cefb3a14663de4ba8575d4519->enter($__internal_d47a53c41131b40ceee3f2644d4baea851a74f3cefb3a14663de4ba8575d4519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d47a53c41131b40ceee3f2644d4baea851a74f3cefb3a14663de4ba8575d4519->leave($__internal_d47a53c41131b40ceee3f2644d4baea851a74f3cefb3a14663de4ba8575d4519_prof);

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
