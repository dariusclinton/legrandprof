<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9b0071fb235494fb8fe582d971882afc111c16c18bc955ffb91621482214587c extends Twig_Template
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
        $__internal_70884f96163edb04100b3bd0b2fcb45dfa3e11e426b8fd40f05aae9f97f0c306 = $this->env->getExtension("native_profiler");
        $__internal_70884f96163edb04100b3bd0b2fcb45dfa3e11e426b8fd40f05aae9f97f0c306->enter($__internal_70884f96163edb04100b3bd0b2fcb45dfa3e11e426b8fd40f05aae9f97f0c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_70884f96163edb04100b3bd0b2fcb45dfa3e11e426b8fd40f05aae9f97f0c306->leave($__internal_70884f96163edb04100b3bd0b2fcb45dfa3e11e426b8fd40f05aae9f97f0c306_prof);

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
