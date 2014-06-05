MODX-ab-process
===============

##MODX Simple A/B Process using Placeholder Chunks##

> This tutorial will outline a custom A/B scenario using Placeholders, some simple PHP, and Content Chunks. 

- - -

##Chunks##

**This scenario is calling a chunk based on the campaign that is set.**

Our Content Chunks are named like so:

- home_CampaignA
- home_CampaignB

If you have additional chunks to switch like say a specific JS or CSS file name that chunk accordingly also:

- home_css_CampaignA
- home_js_CampaignA 

**Setting the chunk placeholder in your template:**

```
[[$home_[[+campaign]]]]
```

*campaign* is our placeholder we will set next

- - -

##SNIPPET##

**Use the snippet in this folder as a guide to setup your experiment scenario. It should be called in the very TOP of your template.**

    [[!experimentPlaceholder]]

Since we are doing a 50/50 experiment lets use a simple even/odd scenario. If the minute is even **CampaignB** is set else **CampaignA** is set as the placeholder variable.









