<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns="http://www.w3.org/1999/xhtml" 
  version="1.0">
  <xsl:import href="http://www.gtwebdev.org/test/Project3/xsl/dateTime2.xsl" />
  <xsl:template match="/">
  	<xsl:variable name="layoutKey"><xsl:value-of select="//time-layout[count(//time-layout)]/layout-key/text()" /></xsl:variable>
    <html>
      <head>
        <title>Hourly Weather</title>
        <link rel="stylesheet" type="text/css" href="css/common.css"/>
        <link rel="stylesheet" type="text/css" href="css/hourly.css"/>
        <script type="text/javascript" src="js/prototype.js"></script>
        <script type="text/javascript" src="js/hourly.js"></script>
      </head>
      <body>
      	<h1>Hourly Weather</h1>
        <xsl:apply-templates 
          select="//time-layout[layout-key=$layoutKey]" 
          mode="list"></xsl:apply-templates>
        <table id="data">
          <thead>
            <tr>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Time</th>
              <xsl:apply-templates 
                select="//time-layout[layout-key=$layoutKey]" mode="data"></xsl:apply-templates>
            </tr>
            <tr>
              <th>Conditions</th>
              <xsl:apply-templates select="//weather"></xsl:apply-templates>
            </tr>
            <!--tr>
              <th>Location</th>
              <td>
                 <xsl:value-of select="//station_id"/>
              </td>
            </tr>
            <tr>
              <th>Last Update</th>
              <td>
                <xsl:value-of select="//observation_time_rfc822"/>
              </td>
            </tr>
            <tr>
              <th>Temperature</th>
              <td>
                <xsl:value-of select="//temp_f" />&#xB0;F (<xsl:value-of select="//temp_c" />&#xB0;C)
              </td>
            </tr>
            <tr>
              <th>Wind</th>
              <td>
                <xsl:value-of select="//wind_mph" />mph (<xsl:value-of select="//wind_degrees" />&#xB0; <xsl:value-of select="//wind_dir" />)
              </td>
            </tr>
            <tr>
              <th>Wind Chill</th>
              <td>
                <xsl:value-of select="//windchill_f" />&#xB0;F (<xsl:value-of select="//windchill_c" />&#xB0;C)
              </td>
            </tr>
            <tr>
              <th>Dew Point</th>
              <td>
                <xsl:value-of select="//dewpoint_f" />&#xB0;F (<xsl:value-of select="//dewpoint_c" />&#xB0;C)
              </td>
            </tr-->
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="time-layout" mode="list">
    <ul id="timePeriod">
      <xsl:for-each select="./start-valid-time">
        <li>
            <xsl:element name="a">
              <xsl:attribute name="href">#</xsl:attribute>
              <xsl:attribute name="onclick">Hourly.setDataSet(<xsl:value-of select="position()"/>); return false;</xsl:attribute>
              <xsl:call-template name="timeFormat">
                <xsl:with-param name="timeValue">
                  <xsl:value-of select="text()"/>
                </xsl:with-param>
              </xsl:call-template>              
            </xsl:element>
        </li>
      </xsl:for-each>
    </ul>
  </xsl:template>

  <xsl:template match="time-layout" mode="data">
      <xsl:for-each select="./start-valid-time">
      <xsl:element name="td">
        <xsl:attribute name="class">col<xsl:value-of select="position()"/></xsl:attribute>
          <xsl:value-of select="./text()"/>
      </xsl:element>
      </xsl:for-each>
  </xsl:template>

  <xsl:template match="weather">
    <xsl:for-each select="./weather-conditions">
      <xsl:element name="td">
        <xsl:attribute name="class">col<xsl:value-of select="position()"/></xsl:attribute>
        <xsl:for-each select="./value">
          <xsl:value-of select="./@additive"/>
          <xsl:text> </xsl:text>
          <xsl:value-of select="./@coverage"/>
          <xsl:text> </xsl:text>
          <xsl:if test="./@intensity != 'none'">
            <xsl:value-of select="./@intensity"/>
            <xsl:text> </xsl:text>
          </xsl:if>
          <xsl:if test="./@qualifier != 'none'">
            <xsl:value-of select="./@qualifier"/>
            <xsl:text> </xsl:text>
          </xsl:if>
          <xsl:value-of select="./@weather-type"/>
          <xsl:text> </xsl:text>
        </xsl:for-each>
      </xsl:element>
    </xsl:for-each>
  </xsl:template>
</xsl:stylesheet>
