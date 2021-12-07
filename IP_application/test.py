import cv2
import mediapipe as mp
from mediapipe.python.solutions import face_mesh
import numpy as np

#init main point array
color_array = []

#to access facemesh lib from mediapipe to identify facial landmarks
mpFaceMesh = mp.solutions.face_mesh
face_mesh = mpFaceMesh.FaceMesh()

#getting image
image = cv2.imread("D:\Xampp\htdocs\Katify\IP_application/test6.jpg") #test: cannot add with multiple faces
rgb_image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB) 
height, width, _ = image.shape

#process image
result = face_mesh.process(rgb_image)
for facialLandmarks in result.multi_face_landmarks:
    #specific landmarks are detected through the mediapipe library are considered here because not all landmarks are valid
    landmarks_array = [3, 6, 8, 9, 32, 36, 69, 67, 109, 108, 101, 117, 135, 151, 172, 169, 171, 165, 170, 199, 194, 192, 187, 200, 211, 204, 202, 207, 206, 210, 216, 228, 229, 266, 262, 277, 275, 273, 280, 281, 297, 299, 298, 330, 343, 338, 333, 343, 349, 348, 347, 350, 371, 357, 351, 391, 393, 423, 411, 420, 419, 421, 418, 422, 424, 429, 437, 425, 426, 432, 427, 436, 434, 430, 431, 428, 449, 448, 450, 451, 452]
    for i in landmarks_array:
        pt =facialLandmarks.landmark[i]
        x = int(pt.x * width)
        y = int(pt.y * height)
        ptcor = rgb_image[x][y]
        cv2.circle(image, (x,y), 3, (255,255,255), -1)
        #cv2.putText(image, str(i), (x,y), cv2.FONT_HERSHEY_SIMPLEX, 1, (0,0,0), 2) 
        color_array.append(ptcor)

mean_cor = np.mean(color_array, axis=0)

#defining the colour boundaries
TARGET_COLORS = {"porcelain": (244,212,187), "ivory": (239, 207, 169), "warm ivory and sand": (242, 196, 144), "beige": (229, 202, 155), "warm beige and natural": (222, 179, 126),
 "honey": (209, 149, 86), "golden": (199, 146, 78), "almond chestnut and expresso": (189, 128, 73)}

def color_difference (color1, color2):
    return sum([abs(component1-component2) for component1, component2 in zip(color1, color2)])

differences = [[color_difference(mean_cor, target_cat), cat_name] for cat_name, target_cat in TARGET_COLORS.items()]
differences.sort()  # sorted by the first element of inner lists
color_cat = differences[0][1]

print(color_cat)

#print(mean_cor)        
cv2.imshow("Image", image)
cv2.waitKey(0)

#looping over the bounda

