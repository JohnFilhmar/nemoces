<?php
$footerData = [
  "footer" => [
    "companyInfo" => [
      "name" => "N.E.M.O.C.E.S.",
      "description" => "Navigational Environmental Monitoring Operator for Coral Ecosystem Surveillance. A research project by the Senior High School Department, Puerto Galera National High School, focusing on sustainable coral reef monitoring and conservation."
    ],
    "contactInfo" => [
      "address" => "Puerto Galera National High School, Puerto Galera, Oriental Mindoro, Philippines",
      "phone" => "(+63) 000-000-0000",
      "email" => "nemoces.project@gmail.com"
    ],
    "bottomBar" => [
      "text" => "© 2025 N.E.M.O.C.E.S. Senior High School Department, Puerto Galera NHS. All rights reserved."
    ]
  ]
];
?>

<footer class="bg-gray-800 text-white py-8 mt-auto text-center z-10 relative">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Company Info -->
      <div>
        <h3 class="text-lg font-semibold mb-4">{{ $footerData['footer']['companyInfo']['name'] }}</h3>
        <p class="text-gray-300 text-sm">
          {{ $footerData['footer']['companyInfo']['description'] }}
        </p>
      </div>

      <!-- Contact Info -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
        <div class="text-gray-300 text-sm space-y-2">
          <p>{{ $footerData['footer']['contactInfo']['address'] }}</p>
          <p>Phone: {{ $footerData['footer']['contactInfo']['phone'] }}</p>
          <p>Email: {{ $footerData['footer']['contactInfo']['email'] }}</p>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-700 mt-8 pt-8 text-center">
      <p class="text-gray-300 text-sm">
        {{ $footerData['footer']['bottomBar']['text'] }}
      </p>
    </div>
  </div>
</footer>
