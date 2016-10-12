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
        $__internal_69ad0a58a75f01108d763e50dda858a238cd260f9680bb77de067aafb7f0af06 = $this->env->getExtension("native_profiler");
        $__internal_69ad0a58a75f01108d763e50dda858a238cd260f9680bb77de067aafb7f0af06->enter($__internal_69ad0a58a75f01108d763e50dda858a238cd260f9680bb77de067aafb7f0af06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_69ad0a58a75f01108d763e50dda858a238cd260f9680bb77de067aafb7f0af06->leave($__internal_69ad0a58a75f01108d763e50dda858a238cd260f9680bb77de067aafb7f0af06_prof);

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
