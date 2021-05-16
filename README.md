# RFTENDANCE
RFID-ATTENDANCE

# Overview:

RFTENDANCE ได้รับการพัฒนาโดยใช้ PHP, CSS และ Javascript ระบบเช็ค RFID ที่ใช้ NodeMCU เป็นการทำงานที่ทันสมัย จึงเป็นโครงการที่น่าสนใจมาก อาจมีประโยชน์ในสถานที่ต่างๆเช่นโรงเรียนวิทยาลัยอุตสาหกรรมและองค์กรเอกชนในการลงทะเบียนการเข้าร่วมของนักเรียนครูพนักงาน ฯลฯ เพื่อจัดตารางชั่วโมงการทำงานรายเดือน / รายวันโดยอัตโนมัติ เมื่อบุคคลที่มีบัตร RFID ที่ถูกต้องรูดแท็ก RFID ของคนๆนั้นเวลาที่มาถึงก็จะถูกเก็บไว้ในบันทึกของระบบ โดยปกติแล้วเมื่อบุคคลคนเดียวกันสแกน RFID อีกครั้งระบบจะบันทึกเป็นเวลาออกจากสถานที่นั้นๆ


RFTENDANCE ได้รับการพัฒนาด้วยแพลตฟอร์ม IoT เราได้ใช้ NodeMCU ESP8266 development board กับ MF-RC522 Module เพื่อส่งการ์ด UID ไปยัง PHP Web app และจัดเก็บข้อมูลลงในฐานข้อมูลของเว็บไซต์ โดยพื้นฐานแล้วผู้ดูแลระบบมีบทบาทสำคัญในการจัดการระบบนี้

# Features:
 **Functionality Performed by users**
ตอนนี้พูดถึงคุณสมบัติของ RFTENDANCE ที่ใช้ RFID โดยใช้ NodeMCU โฮมเพจจะแสดงหน้าเข้าสู่ระบบของผู้ดูแลระบบ และจะเรียกดูและจัดการได้ก็ต่อเมื่อเข้าสู่ระบบเท่านั้น ดังนั้นระบบจึงปลอดภัย โดยพื้นฐานแล้วการออกแบบโครงการระบบการเข้าร่วม RFID นั้นค่อนข้างง่าย ดังนั้นผู้ใช้จะไม่พบปัญหาใด ๆ ในขณะที่สแกนใช้งานนั้น ผู้ใช้ต้องสแกนบัตรหรือพวงกุญแจเพื่อรักษาการเข้าใช้งานซึ่งรวมเวลาเข้าใช้งานด้วย

**functions provided to admin are mentioned below:**
 - ระบบเข้าสู่ระบบและออกจากระบบของแอดมิน
 - แก้ไขและอัพเดทโปรไฟล์แอดมิน
 - ดูข้อมูลผู้ใช้
 - เพิ่มผู้ใช้
 - แก้ไขและอัพเดทผู้ใช้
 - ลบข้อมูลผู้ใช้
 - เพิ่มรายวิชาใหม่
 - อัปเดตรายวิชาที่มีอยู่
 - ลบรายวิชา
 - อัปเดตโทเค็นใหม่ไปยังอุปกรณ์
 - เปลี่ยนโหมดอุปกรณ์ (โหมดการลงทะเบียน: เพื่อลงทะเบียนผู้ใช้ใหม่ โหมดการเข้าร่วม: เพื่อบันทึกการเข้า/ออกของผู้ใช้ที่ลงทะเบียน)
 - ดู Log หรือเมนูบันทึกของผู้ใช้งาน

จากเมนูบันทึกผู้ใช้สามารถไปที่ข้อมูลบันทึกของผู้ใช้ทั้งหมดได้ สามารถดูเวลามาเข้าและเวลาออกได้เช่นกัน 
นอกจากนี้ยังมีฟังก์ชั่นเพิ่มเติมในการกรองบันทึกตาม ผู้ใช้, วันที่, เวลามาถึงเวลาออก และกรองตามส่วนต่างๆเป็นต้น
และยังสามารถส่งออกข้อมูลเหล่านั้นไปยัง excel ได้อีกด้วย

# Hardware Components Required:
- NodeMCU
- RFID Module
- Breadboard
- สายไฟ

# Software Required
- [Arduino IDE](https://www.arduino.cc/en/main/software)
- [XAMPP server](https://www.apachefriends.org/download.html)
- [RFID-RC522 Library](https://github.com/miguelbalboa/rfid)
- [PHP SRC](https://google.com)
- [NodeMcu ESP8266 Library and Board Manager](https://github.com/esp8266/Arduino#installing-with-boards-manager)

# Technology Used in RFTENDANCE Using NodeMCU

- Embedded C: การเขียนฮาร์ดแวร์ทั้งหมดพัฒนาด้วยภาษา C
- PHP: ลอจิกและอินเทอร์เฟซเว็บทั้งหมดเขียนด้วยภาษา PHP
- MYSQL: สำหรับฐานข้อมูลจะใช้ฐานข้อมูล MYSQL
- Apache 2: เพื่อเรียกใช้เว็บอินเตอร์เฟสบนเซิร์ฟเวอร์ Apache 2
- Javascript and CSS: เพื่อจัดรูปแบบเว็บอินเตอร์เฟสด้วยภาพเคลื่อนไหวและตรวจสอบความถูกต้องของฟอร์ม

# RFTENDANCE Network Topology
 [![180160271-1612755128928628-8954132117535727996-n.png](https://i.postimg.cc/tJzzwgJG/180160271-1612755128928628-8954132117535727996-n.png)](https://postimg.cc/WqhrJT05)
 
# RFID RC522 Module
แล้วโมดูล RFID RC522 คืออะไร

ในตอนแรกเรามาเรียนรู้เกี่ยวกับ RFID กันสักเล็กน้อย RFID เป็นรูปแบบสั้น ๆ ของการระบุความถี่วิทยุ โมดูล RFID ใช้สนามแม่เหล็กไฟฟ้าในการถ่ายโอนข้อมูลระหว่างการ์ดและเครื่องอ่าน แท็ก RFID ที่แตกต่างกันจะติดอยู่กับวัตถุเช่นพวงกุญแจการ์ด ฯลฯ และเมื่อใดก็ตามที่เราวางวัตถุนั้นไว้หน้าเครื่องอ่าน RFID เครื่องอ่านจะอ่านแท็กนั้น ประโยชน์ต่อไปของ RFID คือไม่จำเป็นต้องตรวจจับเป็นเส้นตรง ซึ่งแตกต่างจากบาร์โค้ดใน RFID ไม่มีข้อ จำกัด ดังกล่าว ดังนั้นนี่คือคุณสมบัติบางอย่างของ RFID RC522.

รายละเอียด

– ชื่อโมดูล: MF522-ED
– กระแสขณะทำงาน：13—26mA/ DC 3.3V
– กระแสไฟสแตนด์บาย：10-13mA/DC 3.3V
– กระแสไฟนอน：<80uA
– กระแสสูงสุด：<30mA
– ความถี่ในการทำงาน：13.56MHz
– ระยะการอ่านการ์ด：0～60mm（mifare1 card）
– โปรโตคอล：SPI
– ความเร็วในการสื่อสารข้อมูล：Maximum 10Mbit/s
– รองรับประเภทการ์ด：mifare1 S50、mifare1 S70、Mifare UltraLight、mifare Pro、 Mifare Desfire
– Dimension：40mm×60mm
– อุณหภูมิในการทำงาน：-20—80 degree
– อุณหภูมิในการจัดเก็บ：-40—85 degree
– ความชื้น：relevant humidity 5%—95%
– Max SPI speed: 10Mbit/s

ข้อมูลจำเพาะและรายละเอียด

1. 3.3V +3.3V Power Supply
2. RST Reset
3. GND Ground Pin
4. IRO Not Connected
5. MISO Serial Communication
6. MOSI Serial Communication
7. SCK TX/RX with ESP8266
8. SDA TX/RX with ESP8266

รูปภาพประกอบ
 
 [![OFCF196.png](https://i.postimg.cc/0jtw7Krj/OFCF196.png)](https://postimg.cc/sGhxrXYC)
 [![f815-Nn-X-Imgur.png](https://i.postimg.cc/sx2BffKr/f815-Nn-X-Imgur.png)](https://postimg.cc/dkzQ4YzH)

## Contributor
<b>IT KMITL#18</b> <br />
 1.Mr.  Thanawat  Jantawong              63070076 <br />
 2.Mr.  Pisitchai Rueangwatanaphong      63070121 <br />
 3.Mr.  Suphachai Chuensuksri            63070169 <br />
 4.Mr.  Apichet   Komwatcharapong        63070183 <br />

 
<center><table>
 <tr>
  <th><img src="https://media.discordapp.net/attachments/793282060478447636/843429531565293578/117890754_3155423994543005_6112069566971803738_n.png?width=531&height=531" height="150" width="150"></th>
  <th><img src="https://scontent.fbkk8-3.fna.fbcdn.net/v/t1.6435-9/135558998_3528759434016224_5685608112693758907_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=pAPSCvEeY54AX_rkW_7&_nc_ht=scontent.fbkk8-3.fna&oh=30befdb15dfa7bd8b07e8884e6852f0f&oe=60C78B5F" height="150" width="150"></th>
  <th><img src="https://scontent.fbkk12-1.fna.fbcdn.net/v/t1.6435-9/67589688_2435564026721008_7526426871907483648_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=174925&_nc_ohc=av78ZhSRZc0AX_L03ui&_nc_ht=scontent.fbkk12-1.fna&oh=e38986458b4f4190fb9bf14a3d8795b4&oe=60C4FCDF" height="150" width="150"></th>
  <th><img src="https://scontent.fbkk12-3.fna.fbcdn.net/v/t35.18174-12/1071965_271392409670165_765629984_o.jpg?_nc_cat=102&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=KP-2AQlPxmAAX-s6Yy_&_nc_ht=scontent.fbkk12-3.fna&oh=9c9b8be7412a014e413de3359459bb28&oe=60A2583F" height="150" width="150"></th>
 </tr>
 <tr>
  <th><p align="center">Thanawat  Jantawong</p></th> 
  <th><p align="center">Pisitchai Rueangwatanaphong</p></th>
  <th><p align="center">Suphachai Chuensuksri</p></th>
  <th><p align="center">Apichet   Komwatcharapong</p></th>
 </tr>
 <tr>
  <th><p align="center">63070092</p></th>
  <th><p align="center">63070126</p></th>
  <th><p align="center">63070135</p></th>
  <th><p align="center">63070174</p></th>
 </table></center>
 
<br />
