<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">

<xsl:template match="/">

<htmL>
    <body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="font-weight: 600; text-align: center; background-color: #16a085; color: #fff; padding: 10px 0px; border-radius:15px; ">Vegetables</h1>
        <table style=" border-collapse: collapse; border: 1px solid #bdc3c7; border-radius: 15px 15px; overflow:hidden; background-repeat:no-repeat; width:100% ; margin:0; box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);  ">
            <thead >
                <tr style="transition: all .2s ease-in; cursor: pointer;">
                    <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #16a085; color: #fff;">Name</th>
                    <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #16a085; color: #fff;">Price</th>
                    <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #16a085; color: #fff; width:400px">Benefits</th>
                    <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #16a085; color: #fff;">Discount</th>
                    <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #16a085; color: #fff;">Quantity</th>
                    <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #16a085; color: #fff;">Cart</th>
                </tr>
            </thead>
            <tbody>
            <xsl:for-each  select="vegetables/vegetable">
            <tr style="transition: all .2s ease-in; cursor: pointer;">
                <td style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd;" on.MouseOver="this.style.color='red'"> <xsl:value-of select="name"/> </td>
                <td style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd;"> <xsl:value-of select="price"/> </td>
                <td style="padding: 12px; text-align: justify; border-bottom: 1px solid #ddd; width:400px"> <xsl:value-of select="benefits"/> </td>
                <td style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd;"> <xsl:value-of select="discount"/> </td>
                <td style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd;"><input type="number" min="1" max="1000" value="1"/><span>kg(s)</span></td>
                <td style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd; background-color: #29AB87;"><a href="#" style="color:white">Add to Cart</a></td>
            </tr>
            </xsl:for-each>
            </tbody>
        </table>
    </body>
</htmL>

</xsl:template>

</xsl:stylesheet>