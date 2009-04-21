<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
  version="1.0">
  <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <title>Current Weather</title>
        <link rel="stylesheet" type="text/css" href="css/common.css"/>
        <link rel="stylesheet" type="text/css" href="css/current.css"/>
      </head>
      <body>
      	<h1>Current Weather</h1>
        <table>
          <tbody>
            <tr>
              <th>Conditions</th>
              <td>
                <xsl:element name="img">
                  <xsl:attribute name="src">
                    <xsl:value-of select="//icon_url_base"/>
                    <xsl:value-of select="//icon_url_name"/>
                  </xsl:attribute>
                  <xsl:attribute name="alt">
                    <xsl:value-of select="//weather"/>
                  </xsl:attribute>
                </xsl:element>
                <br />
                <xsl:value-of select="//weather"/>
              </td>
            </tr>
            <tr>
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
              <th>Tempereture</th>
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
            </tr>
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
