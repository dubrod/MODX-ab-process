
##A/B Process with Google Analytics "Experiments" and MODX

###Step One: Pages

> Create your 2 Versions (pages) in MODX as Resources. They can share everything except a template.

---

###Step Two: Experiment Code Placeholder.

> Your &lt;head&gt; should already contain the typical GA code.

In your **head chunk** add a placeholder just after `<head>`

```
[[+ga_exp_code]]
```

---

###Step 2.5: Edit Template

> Open the Template for page "A"

Change your **head chunk call** to include the placeholder and the Experiment Code

```
[[$head-front? &ga_exp_code=`
<script>
_udn = "pertino.com";
</script>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}....

</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
`]]
```

---

###Step 2.75: Setup Experiment in GA

You'll have to do **Step 2.5** after you've done step 3 of the GA setup here: https://support.google.com/analytics/answer/1745152?hl=en&ref_topic=1745207


