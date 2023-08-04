<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Accordion with Animation</title>
  <style>
    /* Reset default styles */
body, div, p {
  margin: 0;
  padding: 0;
}

/* Styling for accordion */
.accordion-item {
  border: 1px solid #ccc;
  margin-bottom: 10px;
  overflow: hidden;
}

.accordion-header {
  background-color: #f0f0f0;
  padding: 10px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.accordion-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease-out;
  padding: 10px;
}

.icon {
  font-size: 20px;
  transition: transform 0.3s ease-out;
}

.rotate {
  transform: rotate(45deg);
}

  </style>
</head>
<body>
  <div class="accordion">
    <div class="accordion-item">
      <div class="accordion-header">Section 1<span class="icon">+</span></div>
      <div class="accordion-content">
        <p>This is the content of section 1.</p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header">Section 2<span class="icon">+</span></div>
      <div class="accordion-content">
        <p>This is the content of section 2.</p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header">Section 3<span class="icon">+</span></div>
      <div class="accordion-content">
        <p>This is the content of section 3.</p>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const accordionItems = document.querySelectorAll(".accordion-item");

  accordionItems.forEach(item => {
    const header = item.querySelector(".accordion-header");
    const content = item.querySelector(".accordion-content");
    const icon = item.querySelector(".icon");

    header.addEventListener("click", () => {
      content.classList.toggle("active");
      icon.classList.toggle("rotate");

      if (content.classList.contains("active")) {
        content.style.maxHeight = content.scrollHeight + "px";
      } else {
        content.style.maxHeight = "0";
      }
    });
  });
});

  </script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.accordion {
    width: 50%;
}
.accordion-item {
  background-color: #eee;
  margin-bottom: 10px;
  border: none;
}

.accordion-header {
    box-sizing: border-box;
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.active, .accordion-header:hover {
  background-color: #ccc;
} 
.accordion-content {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

/*

*{
    margin: 0;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #f3f3f3;
}

.accordion {
  width: 80%;
  max-width: 600px;
  background-color: #ffffff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  overflow: hidden;
}

.accordion-item {
  border-top: 1px solid #ddd;
}

.accordion-header {
  padding: 15px;
  font-size: 18px;
  font-weight: bold;
  background-color: #f0f0f0;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.active .accordion-header, .accordion-header:hover {
  background-color: #e0e0e0;
}

.accordion-content {
  padding: 15px;
  font-size: 16px;
  line-height: 1.5;
}

*/

.icon {
  color: #777;
  font-weight: bold;
}


.accordion-header::after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active .accordion-header::after {
  content: "\2212";
}
</style>
</head>
<body>
<div class="container">

    <div class="accordion">
      <div class="accordion-item active">
        <div class="accordion-header">Section 1</div>
        <div class="accordion-content" style="max-height: max-content;">
          <p>This is the content of section 1.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">Section 2</div>
        <div class="accordion-content">
          <p>This is the content of section 2.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">Section 3</div>
        <div class="accordion-content">
          <p>This is the content of section 3.</p>
        </div>
      </div>
    </div>
</div>

<script>
document.querySelectorAll('.accordion-header').forEach(header => {
  header.addEventListener('click', () => {
    const accordionItem = header.parentNode;
    const content = accordionItem.querySelector('.accordion-content');
    
    accordionItem.classList.toggle('active');
    content.style.maxHeight = accordionItem.classList.contains('active') ? content.scrollHeight + 'px' : null;
    
    // Close other accordion items
    document.querySelectorAll('.accordion-item').forEach(otherAccordionItem => {
      if (otherAccordionItem !== accordionItem) {
        otherAccordionItem.classList.remove('active');
        otherAccordionItem.querySelector('.accordion-content').style.maxHeight = null;
      }
    });
  });
});
</script>

</body>
</html>


