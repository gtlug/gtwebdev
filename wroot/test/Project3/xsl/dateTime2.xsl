<?xml version="1.0" encoding="UTF-8"?>
<!-- provides a very basic date format function, requires IE-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:ms="urn:schemas-microsoft-com:xslt" exclude-result-prefixes="ms">

    <xsl:variable name="months">
        <month>Jan</month>
        <month>Feb</month>
        <month>Mar</month>
        <month>Apr</month>
        <month>May</month>
        <month>Jun</month>
        <month>Jul</month>
        <month>Aug</month>
        <month>Sep</month>
        <month>Oct</month>
        <month>Nov</month>
        <month>Dec</month>
    </xsl:variable>

    <xsl:template name="dateFormat">
        <xsl:param name="dateValue"/>
        <xsl:value-of select="concat(ms:node-set($months)/*[number(substring($dateValue, 6, 2))], ' ', substring($dateValue, 9, 2), ', ', substring($dateValue, 1, 4))"/>
    </xsl:template>

    <xsl:template name="timeFormat">
        <xsl:param name="timeValue"/>
        <xsl:variable name="AmPmTest" select="number(substring($timeValue, 12, 2))"/>
        <xsl:choose>
            <xsl:when test="$AmPmTest=0">
                <xsl:text>12</xsl:text>
                <xsl:value-of select="substring($timeValue, 14, 3)"/>
                <xsl:text> AM</xsl:text>
            </xsl:when>
            <xsl:when test="$AmPmTest&lt;12">
                <xsl:value-of select="$AmPmTest"/>
                <xsl:value-of select="substring($timeValue, 14, 3)"/>
                <xsl:text> AM</xsl:text>
            </xsl:when>
            <xsl:when test="$AmPmTest=12">
                <xsl:value-of select="$AmPmTest"/>
                <xsl:value-of select="substring($timeValue, 14, 3)"/>
                <xsl:text> PM</xsl:text>
            </xsl:when>
            <xsl:when test="$AmPmTest&gt;12">
                <xsl:value-of select="number($AmPmTest)-12"/>
                <xsl:value-of select="substring($timeValue, 14, 3)"/>
                <xsl:text> PM</xsl:text>
            </xsl:when>
        </xsl:choose>
    </xsl:template>

</xsl:stylesheet>