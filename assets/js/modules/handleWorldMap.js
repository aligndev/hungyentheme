const handleWorldMap = () => {
  const WORLD = document.getElementById("WORLD");
  if (!WORLD) return;
  WORLD.querySelectorAll("path").forEach((country) => {
    let { x, y, width, height } = country.getBBox();
    let cx = x + width / 2;
    let cy = y + height / 2;
    let iconMarkerBlue = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "image",
    );
    let iconMarkerRed = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "image",
    );
    let name = document.createElementNS("http://www.w3.org/2000/svg", "text");
    iconMarkerBlue.setAttributeNS(null, "height", "15");
    iconMarkerBlue.setAttributeNS(null, "width", "15");
    iconMarkerRed.setAttributeNS(null, "height", "15");
    iconMarkerRed.setAttributeNS(null, "width", "15");
    iconMarkerBlue.classList.add("marker-blue");
    iconMarkerBlue.style.pointerEvents = "none";
    iconMarkerRed.style.pointerEvents = "none";
    if (country.id === "USA") {
      name.setAttribute("x", cx + 25);
      name.setAttribute("y", cy + 50);
      name.innerHTML = country.id;
      name.classList.add("north-america");
      iconMarkerBlue.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker-blue.svg",
      );
      iconMarkerBlue.setAttribute("x", cx + 40);
      iconMarkerBlue.setAttribute("y", cy + 40);
      country.parentNode.append(iconMarkerBlue, name);
    }
    if (country.id === "Germany") {
      iconMarkerBlue.classList.add("marker-blue");
      iconMarkerBlue.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker-blue.svg",
      );
      iconMarkerBlue.setAttribute("x", cx - 8);
      iconMarkerBlue.setAttribute("y", cy - 4);
      country.parentNode.append(iconMarkerBlue);
    }
    if (country.id === "Uzbekistan") {
      iconMarkerBlue.classList.add("marker-blue");
      iconMarkerBlue.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker-blue.svg",
      );
      iconMarkerBlue.setAttribute("x", cx - 8);
      iconMarkerBlue.setAttribute("y", cy - 5);
      country.parentNode.append(iconMarkerBlue);
    }

    //Caculate positon names of country -- NA
    if (country.id === "Mexico") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy + 5);
      name.innerHTML = country.id;
      name.classList.add("north-america");
    }
    if (country.id === "Haiti") {
      name.setAttribute("x", cx - 28);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("north-america");
      country.parentNode.append(name);
    }
    if (country.id === "Nicaragua") {
      name.setAttribute("x", cx - 40);
      name.setAttribute("y", cy + 5);
      name.innerHTML = country.id;
      name.classList.add("north-america");
      country.parentNode.append(name);
    }
    if (country.id === "Colombia") {
      name.setAttribute("x", cx - 10);
      name.setAttribute("y", cy + 8);
      name.innerHTML = country.id;
      name.classList.add("north-america");
      country.parentNode.append(name);
    }
    if (
      country.id === "Dominican Republic" ||
      country.id === "Guatemala" ||
      country.id === "Venezuela"
    ) {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("north-america");
      country.parentNode.append(name);
    }
    //Caculate postion names of country -- Asian
    if (country.id === "Vietnam") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy - 8);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Philippines") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy + 10);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Myanmar") {
      name.setAttribute("x", cx - 5);
      name.setAttribute("y", cy - 12);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Thailand") {
      name.setAttribute("x", cx - 50);
      name.setAttribute("y", cy - 10);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Cambodia") {
      name.setAttribute("x", cx - 15);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Malaysia") {
      name.setAttribute("x", cx - 25);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Singapore") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy + 8);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Indonesia") {
      name.setAttribute("x", cx - 50);
      name.setAttribute("y", cy + 15);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    if (country.id === "Australia") {
      name.setAttribute("x", cx - 30);
      name.setAttribute("y", cy - 30);
      name.innerHTML = country.id;
      name.classList.add("asian");
      country.parentNode.append(name);
    }
    //Caculate postion names of country -- Africa
    if (country.id === "Central African Republic") {
      iconMarkerRed.classList.add("marker");
      iconMarkerRed.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker.svg",
      );
      iconMarkerRed.setAttribute("x", cx - 10);
      iconMarkerRed.setAttribute("y", cy - 10);
      country.parentNode.append(iconMarkerRed);
    }
    if (country.id === "Morocco") {
      name.setAttribute("x", cx - 20);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("africa");
      country.parentNode.append(name);
    }
    if (country.id === "Tunisia") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("africa");
      country.parentNode.append(name);
    }
    if (country.id === "Egypt" || country.id === "Ethiopia") {
      name.setAttribute("x", cx - 10);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("africa");
      country.parentNode.append(name);
    }
    if (country.id === "Kenya") {
      name.setAttribute("x", cx - 5);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("africa");
      country.parentNode.append(name);
    }
    if (country.id === "South Africa") {
      name.setAttribute("x", cx - 10);
      name.setAttribute("y", cy - 20);
      name.innerHTML = country.id;
      name.classList.add("africa");
      country.parentNode.append(name);
    }
    //Caculate postion names of country -- India
    if (country.id === "India") {
      iconMarkerRed.classList.add("marker");
      iconMarkerRed.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker.svg",
      );
      iconMarkerRed.setAttribute("x", cx - 20);
      iconMarkerRed.setAttribute("y", cy - 13);
      name.setAttribute("x", cx - 25);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("india");
      country.parentNode.append(iconMarkerRed, name);
    }
    if (country.id === "Sri Lanka") {
      name.setAttribute("x", cx - 25);
      name.setAttribute("y", cy + 10);
      name.innerHTML = country.id;
      name.classList.add("india");
      country.parentNode.append(name);
    }
    if (
      country.id === "Bangladesh" ||
      country.id === "UAE" ||
      country.id === "Pakistan" ||
      country.id === "Jordan"
    ) {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("india");
      country.parentNode.append(name);
    }
    if (country.id === "Israel") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy + 10);
      name.innerHTML = country.id;
      name.classList.add("india");
      country.parentNode.append(name);
    }
    //Caculate postion names of country -- China
    if (country.id === "China") {
      name.setAttribute("x", cx - 15);
      name.setAttribute("y", cy + 15);
      name.innerHTML = country.id;
      name.classList.add("china");
      country.parentNode.append(name);
    }
    if (country.id === "South Korea") {
      name.setAttribute("x", cx - 10);
      name.setAttribute("y", cy + 10);
      name.innerHTML = country.id;
      name.classList.add("china");
      country.parentNode.append(name);
    }
    if (country.id === "Japan") {
      name.setAttribute("x", cx + 10);
      name.setAttribute("y", cy - 10);
      name.innerHTML = country.id;
      name.classList.add("china");
      country.parentNode.append(name);
    }
    //Caculate postion names of country -- Europe
    if (country.id === "Italy") {
      iconMarkerRed.classList.add("marker");
      iconMarkerRed.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker.svg",
      );
      iconMarkerRed.setAttribute("x", cx - 5);
      iconMarkerRed.setAttribute("y", cy - 10);
      name.setAttribute("x", cx - 10);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("europe");
      country.parentNode.append(iconMarkerRed, name);
    }
    if (
      country.id === "Portugal" ||
      country.id === "Belarus" ||
      country.id === "Bulgaria"
    ) {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy);
      name.innerHTML = country.id;
      name.classList.add("europe");
      country.parentNode.append(name);
    }
    if (country.id === "Croatia") {
      name.setAttribute("x", cx);
      name.setAttribute("y", cy - 5);
      name.innerHTML = country.id;
      name.classList.add("europe");
      country.parentNode.append(name);
    }
    if (country.id === "Russia") {
      name.setAttribute("x", cx - 25);
      name.setAttribute("y", cy + 35);
      name.innerHTML = country.id;
      name.classList.add("europe");
      country.parentNode.append(name);
    }
    //render all markers red
    if (
      country.id === "Mexico" ||
      country.id === "Vietnam" ||
      country.id === "China"
    ) {
      iconMarkerRed.classList.add("marker");
      iconMarkerRed.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        "/wp-content/uploads/2022/07/marker.svg",
      );
      iconMarkerRed.setAttribute("x", cx - 2);
      iconMarkerRed.setAttribute("y", cy + 3);
      country.parentNode.append(iconMarkerRed, name);
    }
  });
  //handle hover NA locations
  document
    .getElementById("Mexico")
    .addEventListener("mouseenter", function (e) {
      e.preventDefault();
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll("text.north-america");
      const activeLocationsNA = document.querySelectorAll("path.north-america");
      markerBlue.forEach((marker) => {
        marker.classList.add("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.add("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.add("active");
      });
    });
  document.getElementById("Mexico").addEventListener("mouseleave", function () {
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.north-america");
    const activeLocationsNA = document.querySelectorAll("path.north-america");
    markerBlue.forEach((marker) => {
      marker.classList.remove("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.remove("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.remove("active");
    });
  });
  //handle hover ASIAN locations
  document
    .getElementById("Vietnam")
    .addEventListener("mouseenter", function (e) {
      e.preventDefault();
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll("text.asian");
      const activeLocationsNA = document.querySelectorAll("path.asian");
      markerBlue.forEach((marker) => {
        marker.classList.add("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.add("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.add("active");
      });
    });
  document
    .getElementById("Vietnam")
    .addEventListener("mouseleave", function () {
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll("text.asian");
      const activeLocationsNA = document.querySelectorAll("path.asian");
      markerBlue.forEach((marker) => {
        marker.classList.remove("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.remove("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.remove("active");
      });
    });
  //handle hover Africa locations
  document
    .getElementById("Central African Republic")
    .addEventListener("mouseenter", function (e) {
      e.preventDefault();
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll("text.africa");
      const activeLocationsNA = document.querySelectorAll("path.africa");
      markerBlue.forEach((marker) => {
        marker.classList.add("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.add("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.add("active");
      });
    });
  document
    .getElementById("Central African Republic")
    .addEventListener("mouseleave", function () {
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll("text.africa");
      const activeLocationsNA = document.querySelectorAll("path.africa");
      markerBlue.forEach((marker) => {
        marker.classList.remove("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.remove("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.remove("active");
      });
    });
  //handle hover India locations
  document.getElementById("India").addEventListener("mouseenter", function (e) {
    e.preventDefault();
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.india");
    const activeLocationsNA = document.querySelectorAll("path.india");
    markerBlue.forEach((marker) => {
      marker.classList.add("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.add("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.add("active");
    });
  });
  document.getElementById("India").addEventListener("mouseleave", function () {
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.india");
    const activeLocationsNA = document.querySelectorAll("path.india");
    markerBlue.forEach((marker) => {
      marker.classList.remove("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.remove("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.remove("active");
    });
  });
  //handle hover China locations
  document.getElementById("China").addEventListener("mouseenter", function (e) {
    e.preventDefault();
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.china");
    const activeLocationsNA = document.querySelectorAll("path.china");
    markerBlue.forEach((marker) => {
      marker.classList.add("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.add("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.add("active");
    });
  });
  document.getElementById("China").addEventListener("mouseleave", function () {
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.china");
    const activeLocationsNA = document.querySelectorAll("path.china");
    markerBlue.forEach((marker) => {
      marker.classList.remove("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.remove("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.remove("active");
    });
  });
  //handle hover Europe locations
  document.getElementById("Italy").addEventListener("mouseenter", function (e) {
    e.preventDefault();
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.europe");
    const activeLocationsNA = document.querySelectorAll("path.europe");
    markerBlue.forEach((marker) => {
      marker.classList.add("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.add("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.add("active");
    });
  });
  document.getElementById("Italy").addEventListener("mouseleave", function () {
    const markerBlue = document.querySelectorAll("image.marker-blue");
    const activeTitleNA = document.querySelectorAll("text.europe");
    const activeLocationsNA = document.querySelectorAll("path.europe");
    markerBlue.forEach((marker) => {
      marker.classList.remove("active");
    });
    activeTitleNA.forEach((title) => {
      title.classList.remove("active");
    });
    activeLocationsNA.forEach((location) => {
      location.classList.remove("active");
    });
  });
  //handle hover display popup
  function handlePopupIn(n) {
    const markerInsde = document.querySelectorAll("image.marker");
    const modal = document.getElementById("world");
    modal.classList.add("active");
    modal.classList.add("modal-" + n);
    markerInsde.forEach((marker) => {
      marker.classList.add("active");
    });
  }
  function handlePopupOut(n) {
    const markerInsde = document.querySelectorAll("image.marker");
    const modal = document.getElementById("world");
    modal.classList.remove("active");
    modal.classList.remove("modal-" + n);
    markerInsde.forEach((marker) => {
      marker.classList.remove("active");
    });
  }
  document.getElementById("USA").addEventListener("mouseenter", () => {
    handlePopupIn(1);
  });
  document.getElementById("USA").addEventListener("mouseleave", () => {
    handlePopupOut(1);
  });
  document.getElementById("Germany").addEventListener("mouseenter", () => {
    handlePopupIn(2);
  });
  document.getElementById("Germany").addEventListener("mouseleave", () => {
    handlePopupOut(2);
  });
  document.getElementById("Uzbekistan").addEventListener("mouseenter", () => {
    handlePopupIn(3);
  });
  document.getElementById("Uzbekistan").addEventListener("mouseleave", () => {
    handlePopupOut(3);
  });
  document
    .getElementById("final-buyers-point")
    .addEventListener("mouseenter", () => {
      handlePopupIn(4);
    });
  document
    .getElementById("final-buyers-point")
    .addEventListener("mouseleave", () => {
      handlePopupOut(4);
    });

  document
    .getElementById("shipments-to-regions")
    .addEventListener("mouseenter", (e) => {
      e.preventDefault();
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll(
        "text.north-america, text.asian, text.africa, text.india,text.china, text.europe ",
      );
      const activeLocationsNA = document.querySelectorAll(
        "path.north-america, path.asian, path.africa, path.india, path.china,path.europe",
      );
      markerBlue.forEach((marker) => {
        marker.classList.add("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.add("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.add("active");
      });
    });
  document
    .getElementById("shipments-to-regions")
    .addEventListener("mouseleave", function () {
      const markerBlue = document.querySelectorAll("image.marker-blue");
      const activeTitleNA = document.querySelectorAll(
        "text.north-america, text.asian, text.africa, text.india,text.china, text.europe ",
      );
      const activeLocationsNA = document.querySelectorAll(
        "path.north-america, path.asian, path.africa, path.india, path.china,path.europe",
      );
      markerBlue.forEach((marker) => {
        marker.classList.remove("active");
      });
      activeTitleNA.forEach((title) => {
        title.classList.remove("active");
      });
      activeLocationsNA.forEach((location) => {
        location.classList.remove("active");
      });
    });
};
export default handleWorldMap;
